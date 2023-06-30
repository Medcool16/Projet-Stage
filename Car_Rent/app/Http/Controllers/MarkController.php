<?php

namespace App\Http\Controllers;

use App\Models\mark;
use App\Http\Requests\StoremarkRequest;
use App\Http\Requests\UpdatemarkRequest;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function show(){

        $data = mark::all();
        return view('Admin.Mark',compact('data'));
    }

    public function store(Request $req){
        $this->validate($req,[
            'mark' => 'required'
        ]);


        $new_mark = new mark();
        $new_mark->mark_name = $req->mark;

        $new_mark->save();
        return redirect()->route('mark_show')->with([
            'success' => 'Data inserted successfully'
        ]);
    }

    
    public function remove($id){
        $data = mark::find($id);
        $data->delete();
        
        return redirect()->route('mark_show')->with([
            'success' => 'Data deleted successfully'
        ]);
    }

}
