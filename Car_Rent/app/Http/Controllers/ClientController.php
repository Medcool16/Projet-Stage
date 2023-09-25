<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\fuel;
use App\Models\mark;
use App\Models\client;
use App\Models\modell;
use App\Models\contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;

class ClientController extends Controller
{
    public function show_clients(){
        $data = client::all();

        return view('Admin.Client',compact('data'));
    }

    public function register(Request $req){
        $this->validate($req,[
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'password'=>'required',
            'email'=>'required',
        ]);

        $new_data =new client();

        $new_data->first_name = $req->first_name;
        $new_data->last_name = $req->last_name;
        $new_data->username = $req->username;
        $new_data->email = $req->email;
        $new_data->password = $req->password;

        $new_data->save();

        return redirect()->route('homie');
    }



    public function LogClient(Request $req){

        $this->validate($req,[
            'username' => 'required',
            'password' => 'required'
        ]);
        $username = $req->username;
        $password = $req->password;

        $data = client::where('username',$username)
                    ->where('password',$password)
                    ->exists();

        if($data){
            $client = client::where('username', $username)
            ->where('password', $password)
            ->first();
            $client_id = $client->id;

            Session(['member'=>$client_id]);
            
            return redirect()->route('homie');
            
        }
        else{
            return redirect()->route('logClient')->withErrors([
                'error' => 'Invalid username or password'
            ]);
        }
    }

    public function destroyClient(){
        Session::forget('member');
        return redirect('/');
    }




    // -----------------------------------------------profile--& history--------------------------------------

    public function profile($id){
        $client = client::find($id);
        $history = contract::where('id_member',$id)->get();

        $car = car::all();
        $fuel = fuel::all();
        $model = modell::all();
        $mark = mark::all();

        $nbr_res = contract::where('id_member',$id)->count();


        return view('Client.profile',compact('client','history','model','mark','fuel','car','nbr_res'));
    }

    // ---------------------------------------------------
    public function update_profile(Request $req,$id){
        $client = client::find($id);

        if (!empty($req->new_username)) {
            $client->username = $req->new_username;
        }else{
            
            return redirect()->route('viewProfile',$client->id)->with([
                'error' => 'The Username field must not be empty !!!'
            ]);

        }


        if (!empty($req->old_password) && !empty($req->new_password) && !empty($req->confirm_password)) {
            if ($client->password === $req->old_password  && $req->new_password === $req->confirm_password ) {
                
                $client->password = $req->new_password;
            }else{
                return redirect()->route('viewProfile',$client->id)->with([
                    'error' => 'The password must match !!!'
                ]);
    
            }
        }




        if (!empty($req->new_email)) {
            $client->email = $req->new_email;
        }else{
            return redirect()->route('viewProfile',$client->id)->with([
                'error' => 'The email field must not be empty !!!'
            ]);

        }

        $client->update();

        return redirect()->route('viewProfile',$client->id)->with([
            'success' => 'Data has been updated successfully !'
        ]);

    }
// --------------------admin-----------------------

    public function remove_client($id){
        $remove = client::find($id);
        $remove->delete();


        return redirect()->route('viewClients')->with([
            'success' => 'Data has been removed successfully !'
        ]);
    }


}
