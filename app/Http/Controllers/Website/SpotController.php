<?php

namespace App\Http\Controllers\website;

use App\Models\Spot;
use App\Models\User;
use App\Models\Contact;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpotController extends Controller
{
    //view spot add blade
    public function add_spot_view(){
        $users=User::all();
        $locations=Location::all();
        return view('website.pages.Spot.user-add-spot',compact('users','locations'));
    }

    //store spot details
    public function store_spot(Request $request){
         $request->validate([
            'SpotName'=>'required|string',
            'Spotdetail'=>'required|string'
         ]);
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
    public function userspotlist(){
        $contacts=Contact::first();
        $spots=Spot::with('user','location')->where('user_id',auth()->user()->id)->get();
        // dd($joinedplan);
        return view('website.pages.Spot.My-Spot-list',compact('spots','contacts'));
    }
}
