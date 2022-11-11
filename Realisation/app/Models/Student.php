<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brief;

class Student extends Model
{
    protected $fillable = ["first_name", "last_name" , "email", "promotions_id" , "created_at", "updated_at" , "student_phone" , "student_image" ];


    use HasFactory;
    public function assignedBrief()
    {
        return $this->belongsToMany(Brief::class, 'students_briefs', 'brief_id', 'student_id');
    }

}
