<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\client;
use App\Models\contract;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function show_top_cars(){
        $min = 95;
        $max = 100;
        $data = car::whereBetween('price',[$min,$max])->get();
        $mark = mark::all();
        $fuel = fuel::all();
        $model = modell::all();

        $Count_cars = car::count();
        $Count_clients = client::count();
        $Count_res = contract::count();

        return view('Client.home',compact('data','mark','fuel','model','Count_cars','Count_clients','Count_res'));
    }

}
