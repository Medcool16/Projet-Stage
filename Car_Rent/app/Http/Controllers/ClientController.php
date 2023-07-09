<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            'gender' => 'required',
            'license' => 'required',
            'CIN' => 'required',
            'phone' => 'required',
            'username' => 'required',
            'password'=>'required',
            'email'=>'required',
            'adress'=>'required',
        ]);

        $new_data =new client();

        $new_data->first_name = $req->first_name;
        $new_data->last_name = $req->last_name;
        $new_data->gender = $req->gender;
        $new_data->license = $req->license;
        $new_data->CIN = $req->CIN;
        $new_data->phone = $req->phone;
        $new_data->username = $req->username;
        $new_data->email = $req->email;
        $new_data->password = $req->password;
        $new_data->adress = $req->adress;

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
            $client_name = $client->first_name;
            $client_nickname = $client->last_name;
            $client_mail = $client->email;
            Session(['member'=>$client_name, 'nickname'=>$client_nickname, 'email'=>$client_mail]);
            
            return redirect()->route('homie');
        }
        else{
            return redirect()->route('homie')->withErrors([
                'error' => 'Invalid username or password'
            ]);
        }
    }

    public function destroyClient(){
        Session::forget('member');
        return redirect('/');
    }
}
