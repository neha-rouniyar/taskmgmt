<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Task;
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
        return view('admin.task.workprogress');
    }
    public function taskSubmit(Request $request)
    {
        $task=new Task();
        $task->task_heading=$request->heading;
        $
    }
}
