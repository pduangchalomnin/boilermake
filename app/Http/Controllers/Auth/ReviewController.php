<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Dine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReviewCOntroller extends Controller
{
    public function starReview($request){
      $review = new Review();
      $review->customerUid = Auth::user()->auth0id;
      $review->did=$request->did;
      $review->star=$request->star;
      $review->reviewText=$request->reviewText;
      $review->save();

      Session::flash('success','Thank you for your review.');
      return back();
  }
}
