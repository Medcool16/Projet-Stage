<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\agency;
use App\Models\modell;
use App\Models\contract;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\StorereservationRequest;
use App\Http\Requests\UpdatereservationRequest;
use App\Models\client;

class ReservationController extends Controller{
    // public function car_show_reserve(){
    //     $data = car::where('status','available')->paginate(4);
    //     $mark = mark::all();
    //     $model = modell::all();
    //     $fuel = fuel::all();
    //     return view('Client.reservation',compact('data','mark','model','fuel'));
    // }

    public function all(){
        $data = car::where('status','available')->paginate(5);
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

    public function book($id){
        $car = car::find($id);
        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();

        return view('Client.book',compact('car','mark','model','fuel'));
    }
    
        
    // ---------------------------------------------------------------------------------------------------
    
    public function filter(Request $req){

        $mark = mark::all();
        $model = modell::all();
        $fuel = fuel::all();


        $cars = car::query();

        $min = $req->min_price;
        $max = $req->max_price;

        if (!empty($req->min_price) && !empty($req->max_price)) {
            $cars = $cars->whereBetween('price', [$min, $max]);
        }

        if (!empty($req->people) ) {
            $cars = $cars->where('nbr_person',$req->people);
        }

        if (!empty($req->fue) ) {
            $cars = $cars->where('id_carburant',$req->fue);
        }

        if (!empty($req->gear) ) {
            $cars = $cars->where('gear_box',$req->gear);
        }

        $final = $cars->paginate(4);

        return view('Client.park_types.filter', compact('final','mark','model','fuel'));
    }
    
    
    
    // ---------------------------------------------------------------------------------------------------
       
        public function book_info(Request $request){

            $book_data = new contract();
    
            $book_data->start_location = $request->start_location;
            $book_data->start_time = $request->start_time;
            $book_data->start_date = $request->start_date;
    
            $book_data->end_location = $request->end_location;
            $book_data->end_time = $request->end_time;
            $book_data->end_date = $request->end_date;
    
            $book_data->first_name = $request->customer_first_name;
            $book_data->last_name = $request->customer_last_name;
    
            $book_data->client_id = $request->customer_id;
            $book_data->phone = $request->client_phone;
            $book_data->email = $request->customer_email;
    
            $book_data->more_info = $request->more_info;
    
            $book_data->id_car = $request->id_car;
            $book_data->id_member = $request->id_member;
            $book_data->isPaid = $request->isPaid;
    
            $saved = $book_data->save();

            $car_reserved = car::where('id',$request->id_car)->first();
            if ($car_reserved) {
                $car_reserved->status = 'reserved';
                $car_reserved->update();
            }

            if($saved){
                return redirect()->route('invoice',$book_data->id);
            }
    
        }


}