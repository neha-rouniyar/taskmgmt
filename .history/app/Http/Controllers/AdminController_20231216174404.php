<?php

namespace App\Http\Controllers;

use App\Models\AssignTask;
use App\Models\EmailVerification;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
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
        $rule=$request->validate([
            'heading'=>'required'
        ]);
        $data=Task::find($request->id);
        $data->task_heading=$rule['heading'];
        $data->save();
        return redirect()->route('admin.create.task')->with('update','Task Updated Successfully');
    }
    public function taskDelete(Request $request)
    {
        $data=Task::find($request->id);
        $data->status=1;
        $data->save();
        return back()->with('delete','Task Deleted Successfully');
        
    }
    public function taskAssign()
    {
        $task=Task::all()->where('status',0);
        $users=User::all()->where('usertype','regular');
        return view('admin.task.assign',compact('users','task'));
    }
    public function taskAssignSubmit(Request $request)
    {
        $taskAssign=new AssignTask();
        $taskAssign->task_id=$request->task;
        $taskAssign->user_id=$request->user;
        $taskAssign->save();
        return back()->with('message','Task Assigned to user... Waiting to be verified');
    }
    public function verifyEmail(Request $request,$id)
    {
        $token=$request->token;
        $userData=User::where('token',$token)->first();
        $emailVerificationData=EmailVerification::where('token',$token)->first();
        $time=Carbon::now();
        $currentTime=$time->toDateTimeString();
        if($userData->token == $emailVerificationData->token){
            if($emailVerificationData->expiry_at > $currentTime)
            {
                $userId=$userData->id;
                $userData=User::find($userId);
                $userData->status=1;
                $userData->save();
                return redirect('/login-form')->with('msgs','Please login to continue');
            }else{
                return redirect()->route('register.form')->with('linkExpiry','Your Link to email verification failed. Please Register Again');
            }
        }
    }
    public function viewTaskAssigned(Request $request)
    {
        $data=AssignTask::all();
        return view('admin.task.viewTaskAssigned',compact('data'));
    }
    public function editTaskAssigned(Request $request)
    {
        // dd($request->id);
        $data=AssignTask::find($request->id);
        // dd($data);
        $task=Task::all();
        $users=User::all()->where('usertype','regular');
        return view('admin.task.editAssign',compact('data','task','users'));
    }
    public function updateTaskAssigned(Request $request)
    {
        dd($request->assignTask);
        $data=new AssignTask();
        $data->task_id=$request->task;
        $data->user_id=$request->user;
        $data->save();
        return redirect()->route('admin.view.taskassigned')->with('update','Assigned Task Updated Successfully');
    }
    // php artisan serve --port=443 --to run in https port 
}
