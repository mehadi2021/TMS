<?php

namespace App\Http\Controllers\website;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Query;
use App\Models\Contact;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //query view 
    public function QueryView($tourplan_id){
        $tourplan=AddTourPlan::find($tourplan_id);

        return view('website.pages.contact.queryview',compact('tourplan'));
    }

    //query store method
    public function QueryStore(Request $request){


        Query::create([
            'tourplan_id' =>$request->plan_id,
            'user_id' => auth()->user()->id,
            'subject'=>$request->subject,
            'query'=>$request->question

        ]);
      
        return redirect()->back()->with('msg','query sent. Wait for your reply.'); 
    }
   
 //view query list
public function ViewQueryList(){
    $contacts= Contact::first();
$query=Query::with('user','tourplan')->get();
return view('website.pages.Contact.query-list',compact('query','contacts'));
}

//query reply page view
public function ViewReply($query_id){
    $current_date_time = Carbon::now()->toDateTimeString();
    $query=Query::find($query_id);
    return view('website.pages.Contact.replyView',compact('query','current_date_time'));
        
     }

//query reply 
    public function queryReply(Request $request,$query_id){
    $query=Query::find($query_id);
    $query->update([
         'reply'=>$request->reply,
         'status'=>'replied'
            
        ]);
     return redirect()->route('query.list.view')->with('success','reply has been sent.');
   }
                  
//view query details 
public function ViewQueryDetail($query_id){
    $current_date_time = Carbon::now()->toDateTimeString();
    $query=Query::find($query_id);
    return view('website.pages.Contact.viewQueryDetails',compact('query','current_date_time'));
    
        }
    }