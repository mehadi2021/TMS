<?php

namespace App\Http\Controllers\Website;
use App\Models\Join;
use App\Models\Spot;
use App\Models\User;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Transport;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    //show tour in website
    public function TourPlan(){
        $user=User::all();
        $transports=Transport::all();
        $spot=Spot::all();
        $location=Location::all();

        return view('website.pages.Tourplan.TourPlan',compact('user','spot','location','transports'));
    }
    public function storeTourPlan(Request $request){

        $request->validate([
          
          
           'TourDate'=>'after_or_equal:today',
           'members'=>'required| min:1|max:50',
           'TourDuration'=>'required| min:1|max:30',
           'TourBudget'=>'required|integer|between:100,10000',

        ]);
        // dd($request->all());
        AddTourPlan::create([
                'Tourname'=>$request->TourName,
                'from'=>$request->From,
                'location_id'=>$request->TourDestination,
                'spot_id'=>$request->spotname,
                'TourDuration'=>$request->TourDuration,
                'transport_id'=>$request->Transport,
                'members'=>$request->members,
                'TourDate'=>$request->TourDate,
                'TourBudget'=>$request->TourBudget,
                'user_id'=>$request->username,
                
            ]);
            return redirect()->route('website')->with('msg','Tour plan created successfully.'); 
    }
    public function ViewTourPlanUser(){
        $tourplans=AddTourPlan::with('User','spot','location','transports')->where('status','approved')->get();
        // dd($tourplans);
        return view('website.pages.home',compact('tourplans'));

    }
    public function ViewTourPlanDetails($tourplan_id){
       
        $contacts=Contact::first();
        $tourplan=AddTourPlan::with('user','travelers')->find($tourplan_id);
        $joins=Join::with('user','tourplan')->where('tourplan_id',$tourplan_id)->get();
        // dd($joins);
        

        return view('website.pages.Tourplan.ViewTourPlan',compact('tourplan','joins','contacts'));

    }


    public function viewTourList(){
        $contacts=Contact::first();
        $tourplans=Join::with('user','tourplan','order')->get();
    //   dd($tourplans);
        return view('website.pages.Tourplan.TourPlanList',compact('tourplans','contacts'));
    }
    
  //My plan List
  public function MyPlanList(){
    $contacts=Contact::first();
      $MyPlans=AddTourPlan::with('user','transports','spot','location')->where('user_id',auth()->user()->id)->get();
    //   dd($MyPlans);
    return view('website.pages.Tourplan.My-Plan.MyPlanList',compact('MyPlans','contacts'));
  }

  //my plan edit
  public function MyPlanEdit($tourplan_id){
      $planEdit=AddTourPlan::with('user','transports','spot','location')->find($tourplan_id);
      $transports=Transport::all();
      $spot=Spot::all();
      $location=Location::all();
      return view('website.pages.Tourplan.My-Plan.MyPlan-Edit',compact('planEdit','transports','spot','location'));
  }
 
//my plan update
    public function MyPlanUpdate(Request $request,$tourplan_id){
        $tourplan=AddTourPlan::with('user','transports','spot','location')->find($tourplan_id);
// dd($tourplan);
       $tourplan->update([
        'Tourname'=>$request->TourName,
        'from'=>$request->From,
        'location_id'=>$request->TourDestination,
        'TourDuration'=>$request->TourDuration,
        'TourDate'=>$request->TourDate,
        'TourBudget'=>$request->TourBudget,
        'members'=>$request->members,
        'transport_id'=>$tourplan->transport_id,
        'spot_id'=>$request->spotname,
        

       ]);
       return redirect()->route('Myplan.list')->with('success','tourplan updated successfully');
    }

    //the plans i joined
    public function MyJoinedPlanList(){
        $contacts=Contact::first();
        $joinedplan=Join::with('tourplan','user','order')->where('user_id',auth()->user()->id)->get();
        // dd($joinedplan);
        return view('website.pages.Tourplan.My-Plan.MyJoined-PlanList',compact('joinedplan','contacts'));
    }
}

    
    


