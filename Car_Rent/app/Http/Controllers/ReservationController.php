<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use App\Models\reservation;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;

class ReservationController extends Controller
{
    public function car_show_reserve(){
        $data = car::where('status','available')->paginate(8);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.reservation',compact('data','mark','model','fuel'));
    }

    public function all(){
        $data = car::where('status','available')->paginate(4);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.all',compact('data','mark','model','fuel'));
    }


    public function compact(){
        $data = car::where('type','compact')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.compact',compact('data','mark','model','fuel'));
    }


    public function economy(){
        $data = car::where('type','economy')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.economy',compact('data','mark','model','fuel'));
    }


    public function van(){
        $data = car::where('type','van')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.van',compact('data','mark','model','fuel'));
    }


    public function minivan(){
        $data = car::where('type','minivan')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.minivan',compact('data','mark','model','fuel'));
    }


    public function SUVs(){
        $data = car::where('type', 'SUVs')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.SUVs',compact('data','mark','model','fuel'));
    }


    public function sport(){
        $data = car::where('type','sport')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.sport',compact('data','mark','model','fuel'));
    }


    public function covertible(){
        $data = car::where('type','covertible')->paginate(6);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.park_types.covertible',compact('data','mark','model','fuel'));
    }
}
