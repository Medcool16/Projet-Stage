<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\mark;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function show_top_cars(){
        $min = 100;
        $max = 200;
        $data = car::whereBetween('price',[$min,$max])->get();
        $mark = mark::all();

        return view('Client.home',compact('data','mark'));
    }

}
