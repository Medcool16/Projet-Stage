<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\client;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function car_rows(){
        $available_cars = car::where('status','available')->get();
        $cars = car::count();
        $clients = client::count();
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Admin.Dashboard',compact('cars','clients','available_cars','mark','model','fuel'));
    }
}
