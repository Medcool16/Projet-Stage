<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;

class ClientController extends Controller
{
    public function show_clients(){
        $data = client::all();

        return view('Admin.Client',compact('data'));
    }
}
