<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function test(){
        return view('Client.home');
    }

    public function test2(){
        return view('Client.specials');
    }
}
