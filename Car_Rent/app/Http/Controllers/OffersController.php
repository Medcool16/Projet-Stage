<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use App\Models\offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function hot_offer(){
        $cars = car::where('status','available')->get();

        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Admin.offere', compact('cars','mark','model','fuel'));
    }

    public function store_offers(Request $request){

        $new_offer = new offers();

        $new_offer->new_price = $request->new_price;
        
        $selectedCars = $request->input('hot');

        offers::WhereNotIn('id_car',$selectedCars)->delete();

        foreach ($selectedCars as $carID) {
            offers::create(['id_car' => $carID]);
        }

        $new_offer->save();

        return redirect()->route('offeres')->with([
            'success'=> 'data values saved successfully.'
        ]);
    }
}
