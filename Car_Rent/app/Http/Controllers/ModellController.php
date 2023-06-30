<?php

namespace App\Http\Controllers;

use App\Models\mark;
use App\Models\modell;
use Illuminate\Http\Request;
use App\Http\Requests\StoremodellRequest;
use App\Http\Requests\UpdatemodellRequest;

class ModellController extends Controller
{
    public function show(){
        $mode = modell::all();
        $data = mark::all();
        return view('Admin.Model',compact('data','mode'));
    }

    public function store(Request $req){

        $this->validate($req,[
            'model' => 'required',
            'mark' => 'required'
        ]);

        $new_model = new modell();

        $new_model->model_name = $req->model;
        $new_model->id_mark = $req->mark;

        $new_model->save();
        return redirect()->route('model_show')->with([
            'success' => 'Data inserted successfully'
        ]);
    }


    public function delete($id){
        $data = modell::find($id);
        $data->delete();
        return redirect()->route('model_show')->with([
            'success' => 'Data deleted successfully'
        ]);
    }

}
