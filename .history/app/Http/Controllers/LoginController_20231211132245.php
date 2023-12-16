<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function registerFormSubmit()
    {
        $data=$request->validate([
            'fullname'=>'required',
            'username'=>'required',
            'password'=>'required',
            'dob'=>'required',
            'gender'=>'required'

        ]);
        $datas=new Register();
        $datas->name=$data['fullname'];
        $datas->email=$data['username'];
        $datas->password=Hash::make($request->password);
        $datas->dob=$data['dob'];
        $datas->gender=$data['gender'];
        $datas->save();
        return back();
    }
    
}