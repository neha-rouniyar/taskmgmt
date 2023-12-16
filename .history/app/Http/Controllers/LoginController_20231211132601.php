<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $datas=new Login();
        $datas->email=$data['email'];
        $datas->password=Hash::make($request->password);
        $datas->username=$data['username'];
        $datas->save();
        return back();
    }
    
}
