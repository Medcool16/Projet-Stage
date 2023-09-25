<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class parkController extends Controller
{
    public function park_show(){
        $data = car::where('status','available')->paginate(5);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park',compact('data','mark','model','fuel'));
    }
}
