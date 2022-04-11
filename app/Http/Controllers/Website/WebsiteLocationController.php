<?php

namespace App\Http\Controllers\website;
use App\Models\Blog;
use App\Models\Spot;
use App\Models\Contact;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteLocationController extends Controller
{
    //
    public function LocationSpotView($location_id){
        $contacts = Contact::first();
        $locations=Location::with('spots','blogs')->find($location_id);
        $spot=Spot::with('location')->where('location_id',$locations->id)->get();
        $blog=Blog::with('location')->where('location_id',$locations->id)->get();
        return view('website.Location.LocationSpotView',compact('locations','spot','blog','contacts'));
    }
}
