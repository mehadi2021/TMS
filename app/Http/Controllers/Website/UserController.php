<?php

namespace App\Http\Controllers\Website;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyEmail;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function loginView(){
        return view('website.pages.login');
    }
    public function registration(Request $request)
    {
        $user_image=null;

if($request->hasFile('image'))
{
    
    // step 2: generate file name
    $user_image=date('Ymdhms') .'.'. $request->file('image')->getClientOriginalExtension();

    //step 3 : store into project directory

    $request->file('image')->storeAs('/uploads/users/',$user_image);

}  
        $user = User::create([
           'name'=>$request->user_name,
           'email'=>$request->user_email,
           'password'=>bcrypt($request->user_password),
           'NID'=>$request->nid,
           'Address'=>$request->Address,
           'Gender'=>$request->gender,
           'DOB'=>$request->DOB,
           'image'=>$user_image,
           'bio'=>$request->bio,
           'mobile'=>$request->user_mobile
        ]);
      //for email verification 
       VerifyUser::create([
        'token' => Str::random(60),
        'user_id' => $user->id
        
       ]);
       Mail::to($user->email)->send(new VerifyEmail($user));

        return redirect()->back()->with('message','You need to verify your email. we have sent a verification link in your mail. please check.');


    }

    public function verifyEmail($token){
        $verifiedUser = VerifyUser::where('token',$token)->first();
        if(isset($verifiedUser)){
            $user = $verifiedUser->user;
            if(!$user->email_verified_at){
                $user->email_verified_at = Carbon::now();
                $user->save();
                return \redirect()->route('user.page.login')->with('message','Your email has been verified.');
            }
            else{
                return \redirect()->back()->with('message','your email has already been verified.');
            }
        }
        else{
            return \redirect()->route('user.page.login')->with('error','Something went wrong!!');
        }
    }


    public function login(Request $request)
    {

        $userInfo=$request->except('_token');


        if(Auth::attempt($userInfo)){
            if(Auth::user()->email_verified_at == null){
                Auth::logout();
                return redirect()->route('user.page.login')->with('error','please verify your email to continue!');
            }
            return redirect()->route('website')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }
//view profile
    public function profile($user_id)
    {
        $user=User::find($user_id);
        return view('website.pages.profile',compact('user'));
       
    }
    public function logout()
    {
        Auth::logout();
     return redirect()->route('website')->with('message','Logging out.');
    }

//reset password
    public function showForgotForm(){
        return view('website.reset.forgot');
    }

    public function sendResetLink(Request $request){
      $token=\Str::random(64);
      \DB::table('password_resets')->insert([
        'email' => $request->email, 
        'token' => $token, 
        'created_at' => Carbon::now()
      ]);
      $action_link = route('reset.password.form',['token' =>$token,'email'=>$request->email]);
      $body = "We have received a request to reset the password for <b>Tour plan </b> account associated with ".$request->email.".you can reset your password by clicking on the link below";

      \Mail::send('website.reset.email-forgot',['action_link'=> $action_link,'body'=>$body],function($message)use($request){
          $message->from('nusratety7@gmail.com','Tour plan');
          $message->to($request->email,'your name')
                  ->subject('Reset Password');
      });
      return back()->with('success','we have e-mailed your password reset link.');
    }

    public function showResetForm(Request $request, $token = null){
        return view('website.reset.reset')->with(['token' => $token,'email' => $request->email]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:4|confirmed',
            'password_confirmation' => 'required'
        ]);
        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();
        if(!$check_token){
            return back()->withInput()->with('fail','Invalid token');
        }
        else{
            User::where('email',$request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);
            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();
            return redirect()->route('user.page.login')->with('message','Your password has been changed! You can login with new password.');
        }
    
    }



    //user profile edit
    public function profileEdit($user_id){
        $user= User::find($user_id);
        return view('website.pages.profile-edit',compact('user'));
    }
    public function profileUpdate(Request $request,$user_id){
        $user= User::find($user_id);
        $profile_image=$user->image;
        if($request->hasFile('image'))
        {
$profile_image=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
$request->file('image')->storeAs('/uploads/users/',$profile_image);
        }
$user->update([
    // field name from db || field name from form
    'name'=>$request->user_name,
    'email'=>$request->user_email,
    'password'=>bcrypt($request->user_password),
    'NID'=>$request->nid,
    'Address'=>$request->Address,
    'Gender'=>$request->gender,
    'DOB'=>$request->DOB,
    'image'=>$profile_image,
    'bio'=>$request->bio,
    'mobile'=>$request->user_mobile

]);
return redirect()->route('profile',$user->id)->with('message','Your Profile Updated Successfully.');


        
    }

   
    
}