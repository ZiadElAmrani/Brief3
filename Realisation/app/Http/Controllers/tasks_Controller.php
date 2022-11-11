<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Brief;
use Illuminate\Http\Request;

class tasks_Controller extends Controller
{
    public function form_task($id)
    {
        return view("add_tasks", compact("id"));
    }

    public function insert_task(Request $req)
    {
        $id = $req->id;
        $task = new Task();
        $task->task_name = $req->task_name;
        $task->start_date = $req->start_date;
        $task->finish_date = $req->finish_date;
        $task->description = $req->description;
        $task->brief()->associate($id);
        $task->save();
        return redirect('briefs_index');
    }

    public function edit_task($id)
    {
        $task_edit = Task::where('id', $id)->get();
        return view('edit_task', compact('task_edit'));
    }

    public function update_task(Request $req, $id)
    {
        $task_update = Task::where('id', $id)->update(["task_name" => $req->task_name, "start_date" => $req->start_date, "finish_date" => $req->finish_date, "description" => $req->description]);
        $query = Task::find($id)->first();
        return redirect("Brief/" . $query->brief_id . "/edit");
    }

    public function delete_task($id){
        $query = Task::where('id', $id)->first();
        $task_D = $query->brief_id;
        Task::where('id', $id)->delete();
        return redirect("Brief/". $task_D. "/edit");
    }

    public function search_brief($brief_name = null){
        $data = Brief::where('brief_name', 'like', '%' . $brief_name . '%')->get();
        return view('search_brief', compact('data'));
    }
}
