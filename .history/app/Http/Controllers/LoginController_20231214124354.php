<?php

namespace App\Http\Controllers;

use App\Mail\EmailView;
use App\Models\AssignTask;
use App\Models\EmailVerification;
use App\Models\Login;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\CodeCleaner\ReturnTypePass;

use function Ramsey\Uuid\v1;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginform');
    }
    public function index2()
    {
        return view('registerform');
    }
    public function registerFormSubmit(Request $request)
    {
        $data=$request->validate([
            'email'=>'required',
            'username'=>'required',
            'password'=>'required'

        ]);
        $datas=new User();
        $datas->email=$data['email'];
        $datas->password=Hash::make($request->password);
        $datas->username=$data['username'];
        $datas->usertype='regular';
        $token=rand();
        $userEmail=$datas->email;
        // dd($userEmail);
        $datas->token=$token;
        Mail::to($userEmail)->send(new EmailView($token));
        $datas->save();

        $emailVerification=new EmailVerification();

        $emailVerification->user_id=$datas->id;
        $emailVerification->token =$token;
            $current = Carbon::now();
            $tokenExpiry = $current->addHours(24);
            $emailVerification->expiry_at=$tokenExpiry;
            $emailVerification->save();
        return back()->with('msg','User Registered Successfully. We have sent you an email');
    }
    public function loginFormSubmit(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // $userDetail=User::where('email',$request->email)->first();
        // // dd($userDetail);
        // $verificationCheck=EmailVerification::find($userDetail->id);
        // // dd($verificationCheck);
        // $time=Carbon::now();
        // $currentTime=$time->toDateTimeString();
        // // dd($currentTime);
        // if($verificationCheck->expiry_at <$currentTime)
        // {

        // }
        // $emailVerificationData->expiry_at > $currentTime
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
           
            if(Auth::user()->usertype == 'admin') 
            {
                return redirect()->route('admin.dashboard');  
            }elseif(Auth::user()->usertype == 'regular')
            {
                if(Auth::user()->status == 1){
                    return redirect()->route('user.dashboard'); 
                }elseif(Auth::user()->status != 1){
                    return redirect()->route('login.form')->with('status','You have not been verified. Please check your email to verify yourself ');
                }
             }
        }else{
            return redirect()->route('login.form')->with('fail', 'Invalid Email or Password.');
        }
        return redirect()->route('register.form')->with('message', 'Please register to access.');
    }
   public function userDashboard(Request $request)
   {
      $user=Auth::user();
      $userId=$user->id;
      $userDetails=User::with('assignedTasks.task')->find($userId);
      $assignedTask=$user->assignedTasks;
    //   dd($assignedTask);
    //   dd($assignedTask);
    //   $assignedTask=$user->assignTask->assignedTask;
    //   dd($assignedTask);
    //   $assignedTask=AssignTask::with('user')->where('user_id',$userId)->get();
    //   dd($assignedTask);
    //   dd($user->id);
      return view('user.dashboard',compact('user','assignedTask'));
   }
   public function adminDashboard(Request $request)
   {
      return view('admin.dashboard');
   }
}
