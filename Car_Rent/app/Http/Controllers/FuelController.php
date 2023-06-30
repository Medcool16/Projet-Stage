<?php

namespace App\Http\Controllers;

use App\Models\fuel;
use App\Http\Requests\StorefuelRequest;
use App\Http\Requests\UpdatefuelRequest;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function show_fuels(){
        $fuel = fuel::all();
        return view('Admin.Fuel',compact('fuel'));
    }

    public function store_fuel(Request $req){
        $new_fuel = new fuel();

        $new_fuel->fuel_type = $req->fuel_name;
        $new_fuel->save();

        return redirect()->route('back_fuel');
    }

    public function remove_fuel($id){
        $removed = fuel::find($id);
        $removed->delete();

        return redirect()->route('back_fuel');
    }
}
