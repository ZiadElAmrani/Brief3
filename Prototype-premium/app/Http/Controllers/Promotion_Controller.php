<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Promotion_Controller extends Controller
{
    public function index()
    {
        $data = promotion::all();
        return view('index', compact("data"));
    }

    public function add_promotion()
    {
        return view('add_promotion');
    }

    public function insert_promotion(Request $req)
    {
        $obj = new Promotion();
        $obj->name = $req->name;
        $obj->save();
        return redirect('promotions');
    }

    public function edit_promotion($id)
    {
        $student = DB::table('students')
            ->join('promotions', 'promotions.id', '=', 'students.promotion_id')
            ->select('students.*')
            ->where('promotions.id', $id)
            ->get();

        $data = Promotion::where('id', $id)->get();

        return view('edit_promotion', compact('data', 'student'));
    }

    public function update_promotion(Request $req, $id)
    {
        $promo = Promotion::where('id', $id)->update(['name' => $req->name]);
        return redirect('promotions');
    }

    public function delete_promotion(Request $req)
    {
        Promotion::where('id', $req->id)->delete();
        return redirect('promotions');
    }

    public function search($name = null)
    {
        // dd($request->search);
        //  dd($data);

        $data = Promotion::where('name', 'like', '%' . $name . '%')->get();
        return view('index_search', compact('data'));
    }
}
