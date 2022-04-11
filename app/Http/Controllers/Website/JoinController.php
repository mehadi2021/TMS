<?php

namespace App\Http\Controllers\website;
use App\Models\Join;
use App\Models\User;
use App\Models\Orders;
use App\Models\Contact;
use App\Mail\ConfirmMail;
use App\Models\AddTourPlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class JoinController extends Controller
{
    public function JoinRequest($plan_id){
       

        Join::create([
            'user_id'=>auth()->user()->id,
            'tourplan_id'=>$plan_id,
            'status'=>'pending'

        ]);
       
        return redirect()->back();
    }

    public function joinApprove($join_id){
       
       
        // dd($join_id);
        $joinRequest = Join::find($join_id);
        // dd($joinRequest);
        $planer = AddTourPlan::where('id',$joinRequest->tourplan_id)->get();
        // dd($planer);
        $planer_user = $planer->pluck('user_id');
        // dd($planer_user[0]);
        // dd(auth()->user());
        if ($planer_user[0] == auth()->user()->id) {
            
            if ($joinRequest) {
                $joinRequest->update([
                    'status'=>'approved'
                ]);

            }
            $email=User::where('id',$joinRequest->user_id)->where('email',$joinRequest->user->email)->get();
        $join=[
            'title'=>'Join Approved',
            'body'=>'Hurray!Your Request for joining has been approved by'.$joinRequest->tourplan->user->name,
            'line'=>'please pay the advance amount to confirm your joining,to pay click'
        ];

        Mail::to($email)->send(new ConfirmMail($join));

        return "<h1>Approval Request Has been Sent Via email</h1>";
        }
    
        return redirect()->back();

        
    }
    public function joinDecline($join_id){
        // dd($join_id);
        $joinRequest = Join::find($join_id);
        // dd($joinRequest);
        $planer = AddTourPlan::where('id',$joinRequest->tourplan_id)->get();
        // dd($planer);
        $planer_user = $planer->pluck('user_id');
        // dd($planer_user[0]);
        // dd(auth()->user());
        if ($planer_user[0] == auth()->user()->id) {
            if ($joinRequest) {
                $joinRequest->update([
                    'status'=>'declined'
                ]);
            }
            $email=User::where('id',$joinRequest->user_id)->where('email',$joinRequest->user->email)->get();
            $join=[
                'title'=>'Join declined',
                'body'=>'Sorry!Your Request for joining has been declined by'.$joinRequest->tourplan->user->name,
                'line'=>'please pay the advance amount to confirm your joining,to pay click',
            ];
    
            Mail::to($email)->send(new ConfirmMail($join));
    
            return "<h1>Approval Request Has been Sent Via email</h1>";
        }
        return redirect()->back();

        
    }

    public function payment_info($join_id){
      
        $user_pay=Join::with('order')->find($join_id);
        $contacts=Contact::first();
        // dd($user_pay);
        return view('website.payment.payment-info',compact('user_pay','contacts'));
    }
    
}
