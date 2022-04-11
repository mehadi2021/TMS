<?php

namespace App\Http\Controllers\website;
use App\Models\Blog;
use App\Models\Join;
use App\Models\Spot;
use App\Models\Query;
use App\Models\Review;
use App\Models\Contact;

use App\Models\Location;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $locations=Location::all();
        $spots=Spot::where('status','approved')->get();
        $tourplans=AddTourPlan::where('status','approved')->get();
        $reviews=Review::where('status','approved')->get();
        $Blogs=Blog::where('status','approved')->get();
        $contacts= Contact::first();        


        // dd($tourplans);
        // dd($Blogs);
        if (auth()->user()) {
         $user = auth()->user()->id;
        $join=Join::where('user_id',$user)->get();
        }
        else {
            $join=Join::all();
        }
        // dd($request->all());
        $search = $request->search;
        $result = AddTourPlan::with('user','spot','location','transports')
        ->whereLike(['spot.SpotName','location.Location_name','Tourname'],$search)->get();
        // dd($result);
        return view('website.pages.search.search-Tour', compact('result','contacts','locations','spots','tourplans','reviews','join','Blogs'));
    }
}
