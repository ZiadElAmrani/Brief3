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

        // student validation: 

        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students',
            'student_phone' => 'required|size:10|regex:/[0][67][0-9]{8}/',
        ]);

        // save image in images folder
        $file_extension = $req->student_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'students_images';
        $req->student_image->move($path, $file_name);



        $student = new Student();
        $student->first_name = $req->first_name;
        $student->last_name = $req->last_name;
        $student->email = $req->email;
        $student->promotion_id = $id;
        $student->student_phone = $req->student_phone;
        $student->student_image = $file_name;

        $student->save();

        return redirect("promotion/" . $id . "/edit")->with('success', 'Student has been created successfully.');
    }

    public function student_edit($id)
    {
        $data = Student::where('id', $id)->get();

        return view('student_edit', compact('data'));
    }

    public function student_update(Request $req, $id)
    {
        $Student = Student::where('id', $id)->update(["first_name" => $req->first_name, "last_name" => $req->last_name, "email" => $req->email, "student_phone" => $req->student_phone]);
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
