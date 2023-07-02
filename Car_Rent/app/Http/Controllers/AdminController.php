<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $req){
        $username = $req->username;
        $password = $req->password;

        $data = admin::where('username',$username)
                        ->where('password',$password)
                        ->exists();

        if ($data) {
            session(['name' => $username]);
            return redirect('/dashboard');
            //header('Location: /dashboard');
            // exit;
        }
        else{
            return redirect()->route('error_show')->withErrors([
                'error' => 'Invalid username or password'
            ]);
        }
    }


    public function destroy(){
        Session::forget('name');
        return view('Client.home');
    }
}
