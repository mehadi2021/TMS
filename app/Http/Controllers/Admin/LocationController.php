<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function createLocation(){
    return view('admin.layouts.Location.location');
    }
    public function storeLocation(Request $request){

        // $request->validate([
        //     'LocationName'=>'required',
        //     'Locationdetails'=>'required'|'string',
        //     'Country'=>'required'|'string',
            
           
        // ]);
        // dd($request->all());
        $LocationImageFile='';
        if($request->hasFile('location_image')){
            $file=$request->file('location_image');
            $LocationImageFile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Locations/',$LocationImageFile);

        }
        Location::create([
           
            'Location_name'=>$request->LocationName,
            'Country'=>$request->Country,
            'Location_image'=>$LocationImageFile,
            'LocationDetails'=>$request->Locationdetails
        ]);
        return redirect()->back()->with('msg','Your location added successfully.');

    }
    public function LocationList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $locations=Location::whereLike(['Location_name'],$key)->get();;
        // dd($travelers);
        return view('admin.layouts.Location.LocationList',compact('locations','key'));
        }
        $locations=Location::all();
        return view('admin.layouts.Location.LocationList',compact('locations','key'));

    }
    public function deletelocation($location_id){
        $locations=Location::find($location_id)->delete();
        return redirect()->back()->with('success','Location deleted successfully');

    }
    public function LocationDetails($location_id){
        $location=Location::find($location_id);
        return view('admin.layouts.Location.locationDetails',compact('location'));

    }
    public function EditLocation($location_id){
        $location=Location::find($location_id);
        return view('admin.layouts.Location.location-edit',compact('location'));
    }
    public function UpdateLocation(Request $request,$location_id){
        // dd($request->all());
        $location=Location::find($location_id);
        $locationImage=$location->Location_image;
        if($request->hasFile('location_image')){
            $locationImage=date('Ymdhms').'.'.$request->file('location_image')->getClientOriginalExtension();
            $request->file('location_image')->storeAs('/uploads/Locations/',$locationImage);
        }
        $location->update([
            'Location_name'=>$request->LocationName,
            'Country'=>$request->Country,
            'Location_image'=>$locationImage,
            'LocationDetails'=>$request->Locationdetails

        ]);
        return redirect()->route('admin.location.list')->with('success','Location Updated successfully.');
    }

    //report location
    public function locationReportshow(){
        $locations=Location::all();
        return view('admin.layouts.location.Report.location_report',compact('locations'));
    }
    public function locationReport(Request $request)
    {

        $locations=Location::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.location.Report.location_report',compact('locations'));

    }
}
