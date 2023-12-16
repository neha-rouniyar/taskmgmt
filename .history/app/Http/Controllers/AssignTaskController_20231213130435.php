<?php

namespace App\Http\Controllers;

use App\Models\AssignTask;
use App\Models\Task;
use Illuminate\Http\Request;

class AssignTaskController extends Controller
{
    public function viewTaskAssigned()
    {
        return view('user.viewTaskAssigned');
    }
    public function acceptTask(Request $request)
    {
        // dd($request->id);
        $task_id=Task::find($request->id);
        $task_id->status='ongoing';
        $task_id->save();

        $assignTask=AssignTask::find($request->id);
        $assignTask->status=1;
        $assignTask->save();

        return back();
    }
    public function rejectTask(Request $request)
    {
        $task_id=Task::find($request->id);
        $task_id->status='rejected';
        $task_id->save();
        return back();
    }
}
