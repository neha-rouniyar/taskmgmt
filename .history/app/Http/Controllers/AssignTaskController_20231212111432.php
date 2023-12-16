<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignTaskController extends Controller
{
    public function viewTaskAssigned()
    {
        return view('user.viewTaskAssigned');
    }
}
