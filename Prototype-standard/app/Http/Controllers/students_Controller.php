<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


class students_Controller extends Controller
{
    public function form_student($id)
    {
        return view('add_student', compact("id"));
    }

    public function studentstore(Request $req)
    {
        $id = $req->id;

        $student = new Student();
        $student->first_name = $req->first_name;
        $student->last_name = $req->last_name;
        $student->email = $req->email;
        $student->promotion_id = $id;
        $student->save();
        return redirect("promotion/" . $id . "/edit");
    }

    public function student_edit($id)
    {
        $data = Student::where('id', $id)->get();

        return view('student_edit', compact('data'));
    }

    public function student_update(Request $req, $id)
    {
        $Student = Student::where('id', $id)->update(["first_name" => $req->first_name, "last_name" => $req->last_name, "email" => $req->email]);
        $query = Student::find($id);
        return redirect("promotion/" . $query->promotion_id . "/edit");
    }

    public function student_delete($id)
    {
        $query = Student::where('id', $id)->first();
        $promo = $query->promotion_id;
        Student::where('id', $id)->delete();
        return redirect("promotion/" . $promo . "/edit");
    }
}
