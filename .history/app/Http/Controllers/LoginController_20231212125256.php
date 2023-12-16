<?php

namespace App\Http\Controllers;

use App\Mail\EmailView;
use App\Models\Login;
use App\Models\User;
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
        $datas->token=rand();
        // dd($datas->token);
        Mail::to($request->email)->send(new EmailView($));
        $datas->save();
        return back()->with('msg','User Registered Successfully. We have sent you an email');
    }
    public function loginFormSubmit(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
           
            if(Auth::user()->usertype == 'admin') 
            {
                return redirect()->route('admin.dashboard');  
            }elseif(Auth::user()->usertype == 'regular')
            {
                 return redirect()->route('user.dashboard'); 
             }
        }else{
            return redirect()->route('login.form')->with('fail', 'Invalid Email or Password.');
        }
        return redirect()->route('register.form')->with('message', 'Please register to access.');
    }
   public function userDashboard(Request $request)
   {
      $user=Auth::user();
      return view('user.dashboard',compact('user'));
   }
   public function adminDashboard(Request $request)
   {
      return view('admin.dashboard');
   }
}
