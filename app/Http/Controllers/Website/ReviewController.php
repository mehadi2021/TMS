<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Models\Spot;
use App\Models\Review;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
public function addreview(){
    $user=User::all();
    $spot=Spot::all();
    $location=Location::all();
    return view('website.pages.Review.ReviewForm',compact('user','spot','location'));
}
public function storereview(Request $request){
    $request->validate([
        'traveler_name' => 'required',
        'review' => 'required',
        'traveler_name' => 'required',
    ]);
   Review::create([
       'user_id'=>$request->traveler_name,
       'location_id'=>$request->location,
       'spot_id'=>$request->traveler_name,
       'review'=>$request->review
       
   ]);
   return redirect()->back()->with('msg','Your review has been sent.');
    
}
}
