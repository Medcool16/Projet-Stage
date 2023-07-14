<?php

namespace App\Http\Controllers;

use App\Models\agency;
use Illuminate\Http\Request;
use App\Http\Requests\StoreagencyRequest;
use App\Http\Requests\UpdateagencyRequest;

class AgencyController extends Controller
{
    public function show_agencies(){
        $agency = agency::all();
        return view('Admin.Agencie',compact('agency'));
    }

    public function store_agency(Request $req){
        //-----------validation
        $this->validate($req,[
            'ag_name' =>'required',
            'ag_location' =>'required',
            'ag_city' =>'required',
            'ag_contact' =>'required',
        ]);


        $new_agency = new agency();

        $new_agency->name = $req->ag_name;
        $new_agency->location = $req->ag_location;
        $new_agency->contact = $req->ag_contact;
        $new_agency->city = $req->ag_city;

        $new_agency->save();

        return redirect()->route('back_agency')->with([
            'success' => 'Data inserted successfully'
        ]);
    }

    public function remove_agency($id){
        $removed = agency::find($id);
        $removed->delete();

        return redirect()->route('back_agency')->with([
            'success' => 'Data deleted successfully'
        ]);
    }
}
