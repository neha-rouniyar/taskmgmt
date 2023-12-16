<?php

namespace App\Http\Controllers;

use App\Models\AssignTask;
use App\Models\Task;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AssignTaskController extends Controller
{
    public function viewTaskAssigned()
    {
        return view('user.viewTaskAssigned');
    }
    public function acceptTask(Request $request)
    {
        $task_id=Task::find($request->id);
        dd($task_id);
        $task_id->status='ongoing';
        $task_id->save();

        $assignTask=AssignTask::find($request->id);
        $assignTask->status='accepted';
        $assignTask->save();

        return back()->with('accepted','Task Accepted');
    }
    public function rejectTask(Request $request)
    {
        $assignTask=AssignTask::find($request->id);
        $assignTask->status='rejected';
        $assignTask->save();
        return back()->with('rejected','Task Declined');
    }
    public function completeTask(Request $request)
    {
        $task=Task::find($request->id);
        $task->status='completed';
        $task->save();

        $taskAssign=AssignTask::find($request->id);
        $taskAssign->status='completed';
        $taskAssign->save();
        return back()->with('complete','Task Marked As Complete...');
    }
}