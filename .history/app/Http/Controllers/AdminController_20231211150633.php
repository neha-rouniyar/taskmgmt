<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewUsers()
    {
        $users=User::all()->where('usertype','regular');
        // dd($users);
        return view('admin.viewUsers',compact('users'));
    }
    public function createTask()
    {
        return view('admin.task.create');
    }
    public function viewWorkProgress()
    {
        return view();
    }
}
