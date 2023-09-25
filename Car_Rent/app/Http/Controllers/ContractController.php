<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Http\Requests\StorecontractRequest;
use App\Http\Requests\UpdatecontractRequest;
use App\Models\agency;
use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\modell;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContractController extends Controller
{
    public function showInvoice($id){
        $invoice = contract::find($id);
        $car = car::find($invoice->id_car);
        $fuel = fuel::all();
        $mark = mark::all();
        $model = modell::all();

        $start_date = Carbon::parse($invoice->start_date);
        $end_date = Carbon::parse($invoice->end_date);

        $duration = $start_date->diffInDays($end_date);

        $agency  = agency::where('id',1)->first();

        return view('Client.invoice',compact('invoice','duration','car','fuel','mark','model','agency'));
    }



    public function show_reservation_a(){

        $contract = contract::all();
        $car = car::all();
        $fuel = fuel::all();
        $mark = mark::all();
        $model = modell::all();

        return view('Admin.Reservation',compact('contract','fuel','car','mark','model'));
    }


    public function pay($id){
        $contract = contract::find($id);
    
        if ($contract) {
            $contract->isPaid = !$contract->isPaid;
            $contract->save();
    
            return redirect()->route('show_reservations')->with([

                'success' => 'Contract has been marked as paid.'
            ]);

        } else {
            
            return redirect()->route('show_reservations')->with([
                'error'=> 'Contract not found.'
            ]);
        }
    }

    public function cancel_reservation($id){
        
        $reservation = contract::find($id);
        

        $cancel_reserved = car::where('id',$reservation->id_car)->first();
            if ($cancel_reserved) {
                $cancel_reserved->status = 'available';
                $cancel_reserved->update();
            }

            $reservation->delete();

        return redirect()->route('show_reservations')->with([
            'success' => "Data has been removed successfully"
    ]);
    }


    

}
