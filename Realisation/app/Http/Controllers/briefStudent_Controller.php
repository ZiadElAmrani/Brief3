<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Brief;
use Illuminate\Http\Request;

class briefStudent_Controller extends Controller
{
    public function displayStudents($id)
    {
        $data = Student::all();
        $brief_id = $id;
        return view("briefAssignment", compact('data', 'brief_id'));
    }

    public function attachBriefSt($brief_id, $id)
    {
        $brief = Brief::where('id', $brief_id)->first();
        $student = Student::where('id', $id)->first();
        if ($student->assignedBrief()->exists()) {
            $student->assignedBrief()->detach($brief_id);
            $student->assignedBrief()->save($brief);
            return redirect('BriefAssign/' . $brief_id);
        } else {


            $student->assignedBrief()->save($brief);

            return redirect('BriefAssign/' . $brief_id);
        }
    }

    public function detachBriefSt($brief_id, $id)
    {
        $student = student::where('id', $id)->first();
        $student->assignedBrief()->detach($brief_id);
        return redirect('BriefAssign/' . $brief_id);
    }

    public function attachClass($brief_id, $id)
    {
        $student = Student::all();
        foreach($student as $stu){
            if ($stu->assignedBrief()->exists()){
                $stu->assignedBrief()->detach($brief_id);
            }
            $stu->assignedBrief()->attach($brief_id);
        }
        return redirect('BriefAssign/' . $brief_id);
    }

    
}
