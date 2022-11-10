<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Task;

class Brief extends Model
{
    public function task()
    {
        return $this->hasMany(Task::class);
    }


    use HasFactory;
    public function targetApprentice()
    {
        return $this->belongToMany(Student::class,'students_briefs','brief_id', 'student_id');
    }
}
