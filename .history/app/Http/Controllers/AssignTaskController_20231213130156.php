<?php

namespace App\Http\Controllers;

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
        $task_id->status='accepted';
        $task_id->save();
        return back();
    }
    public function rejectTask()
    {
        $task_id=Task::find($request->id);
        $task_id->status='accepted';
        $task_id->save();
        return back();
    }
}
