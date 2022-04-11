<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;

use App\Models\Spot;
use App\Models\User;
use App\Models\Location;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
     //for showing the admin dashboard
    public function index(){
        $count['tourplans']=AddTourPlan::all()->count();
        $count['Approved_tourplans']=AddTourPlan::where('status','approved')->get()->count();
        $count['pending_tourplans']=AddTourPlan::where('status','pending')->get()->count();
        $count['Declined_tourplans']=AddTourPlan::where('status','declined')->get()->count();
        $count['travelers']=User::where('role','user')->get()->count();
       
        $count['spot']=Spot::all()->count();
        $count['blogs']=Blog::all()->count();
        $count['Approved_blogs']=Blog::where('status','approved')->get()->count();
        $count['pending_blogs']=Blog::where('status','pending')->get()->count();
        $count['Declined_blogs']=Blog::where('status','declined')->get()->count();
        $count['location']=Location::all()->count();
        return view('admin.layouts.index',compact('count'));
        
    }
}
