<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Http\Requests\StorereviewRequest;
use App\Http\Requests\UpdatereviewRequest;
use App\Models\client;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   public function show_review(){
        $reviews = review::all();
        $client = client::all();

        return view('Client.review', compact('reviews','client'));
   }

   public function add_review(Request $req){

      $new_review = new review;

      $new_review->full_name = $req->full_name;
      $new_review->comment = $req->comment;
      $new_review->rate = $req->rate;

      $new_review->save();

      return redirect()->route('review');
   }
}
