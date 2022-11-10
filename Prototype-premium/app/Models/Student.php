<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brief;

class Student extends Model
{
    use HasFactory;
    public function assignedBrief()
    {
        return $this->belongsToMany(Brief::class, 'students_briefs', 'brief_id', 'student_id');
    }
}
