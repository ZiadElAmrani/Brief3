<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\Task;
use Illuminate\Http\Request;

class briefs_Controller extends Controller
{
    public function index_briefs()
    {
        $data = Brief::all();
        return view('index_briefs', compact('data'));
    }

    public function add_briefs()
    {
        return view('add_brief');
    }

    public function insert_briefs(Request $req)
    {
        $obj = new Brief();
        $obj->brief_name = $req->brief_name;
        $obj->creation_date = $req->creation_date;
        $obj->livration_date = $req->livration_date;
        $obj->save();
        return redirect('briefs_index');
    }

    public function edit_briefs($id)
    {
        $taskData = Brief::where('id', $id)->first();
        $taskData = $taskData->task;

        $data = Brief::where('id', $id)->get();
        return view('edit_brief', compact('data', 'taskData'));
    }

    public function update_briefs(Request $req, $id)
    {
        $brief = Brief::where('id', $id)->update(['brief_name' => $req->brief_name, 'creation_date' => $req->creation_date, 'livration_date' => $req->livration_date]);
        return redirect('briefs_index');
    }

    public function delete_briefs(Request $req)
    {
        Brief::where('id', $req->id)->delete();
        return redirect('briefs_index');
    }

    public function search_brief()
    {
        echo "connect";
    }
}
