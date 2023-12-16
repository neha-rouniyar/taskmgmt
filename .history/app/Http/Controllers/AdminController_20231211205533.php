<?php

namespace App\Http\Controllers;

use App\Models\Task;
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
        return view('admin.task.workprogress');
    }
    public function taskSubmit(Request $request)
    {
        $data=$request->validate([
            'heading'=>'required'
        ]);
        $task=new Task();
        $task->task_heading=$data['heading'];
        $task->save();
        return back()->with('success','Task Created Successfully');
    }
}
