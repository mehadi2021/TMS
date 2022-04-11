<?php

namespace App\Http\Controllers\admin;
use App\Models\Spot;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpotController extends Controller
{
    //Add spot
    public function Addspot(){
        $users=User::all();
        $locations=Location::all();
        return view('admin.layouts.Spot.Addspot',compact('locations','users'));
    }
    //store spot
    public function StoreSpot(Request $request){
        //  dd($request->all());
        $Spotimagefile='';
        if($request->hasFile('SpotImage')){
        
        $file=$request->file('SpotImage');
        $Spotimagefile = date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads/Spots/',$Spotimagefile);
        }
        //dd($resquest->all());
        Spot::create([
            
            'SpotName'=>$request->SpotName,
             'user_id'=>$request->traveler_name,
             'location_id'=>$request->SpotLocation,
             'SpotImage'=>$Spotimagefile,
              'SpotDetails'=>$request->Spotdetail
        ]);
        return redirect()->back()->with('msg','Spot created successfully.');
    }
    public function SpotList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $Spots=Spot::with('location','user')->whereLike(['SpotName','location.Location_name','user.name'],$key)->get();;
        // dd($travelers);
        return view('admin.layouts.Spot.SpotList',compact('Spots','key'));
        }
        $Spots=Spot::with('location','user')->get();
        return view('admin.layouts.Spot.SpotList',compact('Spots','key'));
    }

    public function Spotdelete($spot_id){
        Spot::find($spot_id)->delete();
        return redirect()->back()->with('msg','spot deleted successfully!');
    }

    //user added spot approve,decline
    public function approvespot($spot_id){
        $spot=Spot::find($spot_id);
        
        if($spot)
        {
            $spot->update([
                'status'=>'approved'
            ]);
            return redirect()->back()->with('success','Spot been approved');
        }
       
        
        return redirect()->back();
    
    }
    public function declinespot($spot_id){
        $spot=Spot::find($spot_id);
        
        if($spot)
        {
            $spot->update([
                'status'=>'decline'
                
            ]);
            
            // $TourPlans=AddTourPlan::find($tourplan_id)->delete();
            return redirect()->back()->with('error','Spot has been declined');
        }
        return redirect()->back();
    
    }
    //spot details
    public function SpotDetails($spot_id)
    {

      $spot=Spot::find($spot_id);
        return view('admin.layouts.Spot.Spotdetails',compact('spot'));
    }

        //report spot
        public function spotReportshow(){
            $spots=Spot::all();
            return view('admin.layouts.Spot.Report.Spot-report',compact('spots'));
        }
        public function spotReport(Request $request)
        {
            $request->validate([
                'from' => 'required',
                'to' => 'required|date|after_or_equal:from',
            ]);
    
    
            $spots=Spot::whereBetween('created_at',[$request->from,$request->to])->get();
    
    
            return view('admin.layouts.Spot.Report.Spot-report',compact('spots'));
    
        }

}
