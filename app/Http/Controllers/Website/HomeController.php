<?php

namespace App\Http\Controllers\Website;
use App\Models\Blog;
use App\Models\Join;
use App\Models\Spot;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Location;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    //home
    public function home(){
        // 
        $spots=Spot::where('status','approved')->get();
        $Blogs=Blog::where('status','approved')->get();
        $locations=Location::all();
        $contacts= Contact::first();        
        // $query=Query::all();
    //    $query=Query::Where('status','replied')->get();
       //dd($query);
        $tourplans=AddTourPlan::where('status','approved')->get();
        $reviews=Review::where('status','approved')->get();
        // dd($tourplans);
        // dd($Blogs);
        if (auth()->user()) {
         $user = auth()->user()->id;
        $join=Join::where('user_id',$user)->get();
        }
        else {
            $join=Join::all();
        }
       $result=null;
        

        return view('website.pages.home',compact('spots','Blogs','tourplans','locations','contacts','reviews','join','result'));


    }


    

    
}
