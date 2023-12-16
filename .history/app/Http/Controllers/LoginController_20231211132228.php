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
        return view('registerform');
    }
    
}
