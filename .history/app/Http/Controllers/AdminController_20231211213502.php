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
        $tasks=Task::all();
        return view('admin.task.create',compact('tasks'));
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
    public function taskEdit(Request $request)
    {
        $data=Task::find($request->id);
        return view('admin.task.edit',compact('data'));
    }
    public function taskUpdate(Request $request)
    {
        $data=$request->validate([
            'heading'=>'required'
        ]);
        $task=new Task();
        $task->task_heading=$data['heading'];
        $task->save();
        return back()->with('success','Task Created Successfully');
        $data=Task::find($request->id);
        return view('admin.task.edit');
    }
    
}
