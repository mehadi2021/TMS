<?php

namespace App\Http\Controllers\Admin;
use App\Models\Join;
use App\Models\Spot;
use App\Models\User;
use App\Models\Location;
use App\Models\Transport;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    
    //for viewing the tourplan list of user
  
    public function ViewAdminTourList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $Tourplans=AddTourPlan::with('user','spot','location','transports')
            ->whereLike(['spot.SpotName','user.name','Tourname'],$key)->get();
        return view('admin.layouts.Tourplan.AdminTourList',compact('Tourplans','key'));
        }
        $Tourplans=AddTourPlan::with('user','spot','location','transports')->get();
     //dd($TourPlans);
      return view('admin.layouts.Tourplan.AdminTourList',compact('Tourplans','key'));
        
    }
   
    //for showing details of the tourplan
    public function TourPlanDetails($tourplan_id){
        $tourplan=AddTourPlan::find($tourplan_id);
        return view('admin.layouts.Tourplan.TourPlanDetails',compact('tourplan'));
    }

    public function DeleteTourPlan($tourplan_id){
        $TourPlans=AddTourPlan::find($tourplan_id)->delete();
     //dd($TourPlans);
      return redirect()->back()->with('success','Tour Plan deleted successfully');
        
    }
    public function approveTour($tourplan_id){
        $Tourplan=AddTourPlan::find($tourplan_id);
        
        if($Tourplan)
        {
            $Tourplan->update([
                'status'=>'approved'
            ]);
            return redirect()->back()->with('success','Tour plan has been approved');
        }
        return redirect()->back();
    
    }
    public function declineTour($tourplan_id){
        $Tourplan=AddTourPlan::find($tourplan_id);
        
        if($Tourplan)
        {
            $Tourplan->update([
                'status'=>'decline'
                
            ]);
            
            // $TourPlans=AddTourPlan::find($tourplan_id)->delete();
            return redirect()->back()->with('error','Tour plan has been declined');
        }
        return redirect()->back();
    
    }
    
    //report of tourplan list

    public function TourplanReport(){
        $Tourplans=AddTourPlan::where('status','approved')
                                ->orwhere('status','declined')
                                ->get();
        return view('admin.layouts.Tourplan.Report.TourPlanReport',compact('Tourplans'));
    }

    public function TourPlanReport_Search(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);


        $Tourplans=AddTourPlan::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.Tourplan.Report.TourPlanReport',compact('Tourplans'));

    }

    //joined tourplan list
    public function joinedtourlist(){
        $joined_tour = Join::with('user','tourplan')->get();
        return view ('admin.layouts.Tourplan.join.JoinedTourPlanList',compact('joined_tour'));
    }
    public function JoinTourPlanReport_Search(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);


        $joined_tour=Join::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.Tourplan.join.JoinedTourPlanList',compact('joined_tour'));

    }
}
