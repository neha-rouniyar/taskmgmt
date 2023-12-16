<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $datas->save();
        return back()->with('msg','User Registered Successfully');
    }
    public function loginFormSubmit(Request $request)
    {
        // if (Auth::attempt($credentials))
        // {

        //     if(Auth::user()->user_type == 'admin') {
        //         return redirect()->intended('/admin/dashboard');
        //     }
        //     elseif(Auth::user()->user_type == 'regular')
        //     {
        //         return redirect()->intended('/dashboard');
        //     }

        //     return redirect()->back()->withErrors([
        //     'email' => 'Incorrect email or password'
        // ]);
        // }

        // return redirect()->back()->withErrors([
        //     'email' => 'Incorrect email or password'
        $credentials = $request->only('email', 'password');
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            if(Auth::user()->usertype == 'admin') 
            {
                return redirect()->route('admin.dashboard');  
            }elseif(Auth::user()->usertype == 'regular'){
                        return redirect()->route('user.dashboard'); 
                    }
        }
        return redirect()->route('register.form')->with('message', 'Please register to access.');
    }
   public function userDashboard(Request $request)
   {
      return view('user.dashboard');
   }
}
