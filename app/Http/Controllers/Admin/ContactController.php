<?php

namespace App\Http\Controllers\Admin;
use App\Models\Query;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
  public function contact_show(){
    return view('admin.layouts.contact.AddContact');
  }
  public function contact_store(Request $request){
    $request->validate([
      'company'=>'required',
      'phone'=>'required',
      'address'=>'required',
      'Country'=>'required',
      'email'=>'required'
    ]);
    Contact::create([
      'company_name'=>$request->company,
      'email'=>$request->email,
      'address'=>$request->address,
      'country'=>$request->Country,
      'phone'=>$request->phone
    ]);
    return redirect()->back()->with('msg','contact created successfully.');
  }

  public function contact_list(){
    $contacts = Contact::all();
    return view('admin.layouts.contact.Contactlist',compact('contacts'));
  }
  public function contactReport(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);

        $contacts=Blog::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.contact.Contactlist',compact('contacts'));

    }
}
