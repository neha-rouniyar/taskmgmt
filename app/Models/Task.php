<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function assignedTask()
    {
        return $this->hasMany(AssignTask::class,'task_id','id');
    }
   
}
