<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use Illuminate\Http\Request;
use App\Http\Requests\StorecarRequest;
use Barryvdh\Snappy\Facades\SnappyPdf;
use App\Http\Requests\UpdatecarRequest;
use App\Models\agency;
use Illuminate\Support\Facades\Response;

class CarController extends Controller
{

    public function show(){

        $data = car::all();
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();
    
        return view('Admin.Car',compact('data','mark','model','fuel'));
    }

    public function store_car_data(Request $req){
        // -----Validation----
        $this->validate($req,[
            'matricule' => 'required',
            'gear' => 'required',
            'mark' => 'required',
            'model' => 'required',
            'fuel' => 'required',
            'color' => 'required',
            'speed' => 'required',
            'kilometrage'=>'required',
            'type'=>'required',
            'nbr_person'=>'required',
            'image' => 'required'
        ]);


        // ------image-------
        if ($req->has('image')) {

            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);



            $new_car = new car();

            $new_car->matricule = $req->matricule;
            $new_car->gear_box = $req->gear;
            $new_car->id_marque = $req->mark;
            $new_car->id_model = $req->model;
            $new_car->id_carburant = $req->fuel;
            $new_car->status = $req->status;
            $new_car->color = $req->color;
            $new_car->puissance = $req->speed;
            $new_car->kilometrage = $req->kilometrage;
            $new_car->type = $req->type;
            $new_car->nbr_person = $req->nbr_person;
            $new_car->price = $req->price;
            
            $new_car->image = $imageName;
    
            $new_car->save();
            return redirect()->route('back_car')->with([
                'success' => "Data has been inserted successfully"
            ]);
        }
  



       
    }
    
    public function send_car_update($id){
        $up = car::find($id);
        $data = car::all();
        $fuel = fuel::all();
        $model = modell::all();
        $mark = mark::all();
    
        return view('Admin.car_update',compact('up','model','mark','fuel','data'));
    }
//==============================ADD CAR======================================================

    public function viewCarAdd(){
        $fuel = fuel::all();
        $model = modell::all();
        $mark = mark::all();
        $data = car::all();
    
        return view('Admin.add_car',compact('data','model','mark','fuel'));
    }
//===============================================
    public function update_car(Request $req, $id){
        $up = car::find($id);
        
        if ($req->has('image')) {
            $image_name = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $image_name);
            unlink(public_path('uploads') .'/'. $up->image);
            $up->image = $image_name;
        }


        $up->matricule = $req->matricule;
        $up->gear_box = $req->gear;
        $up->id_marque = $req->mark;
        $up->id_model = $req->model;
        $up->id_carburant = $req->fuel;
        $up->color = $req->color;
        $up->status = $req->status;
        $up->kilometrage = $req->kilometrage;
        $up->type = $req->type;
        $up->nbr_person = $req->nbr_person;
        $up->price = $req->price;
        $up->puissance = $req->speed;
        $up->image = $up->image;

        $up->update();
        return redirect()->route('back_car')->with([
            'success' => "Data has been updated successfully"
    ]);
    }
    
    public function remove_car($id){
        $removed = car::find($id);
        $removed->delete();

        return redirect()->route('back_car')->with([
            'success' => "Data has been removed successfully"
    ]);
    }


}
