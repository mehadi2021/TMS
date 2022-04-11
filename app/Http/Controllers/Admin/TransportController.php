<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    //add transport
    public function addransport(){
        return view('admin.layouts.transport.Addtransport');
    }
    public function Storetransport(Request $request){
        Transport::create([
            'transportName'=>$request->TransportName,
            'transportType'=>$request->TransportType,
            'location'=>$request->location

        ]);
        return redirect()->back();
      
    }
    public function TransportList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $Transports=Transport::where('transportName','LIKE','%'.$key.'%')->orwhere('transportType','LIKE','%'.$key.'%')
                                   ->get();
          return view('admin.layouts.transport.TransportList',compact('Transports','key'));

        }
        $Transports=Transport::all();
        return view('admin.layouts.transport.TransportList',compact('Transports','key'));
    }

    //report transport
    public function TransportReportshow(){
        $Transports=Transport::all();
        return view('admin.layouts.transport.Report.transport_report',compact('Transports'));
    }
    public function TransportReport(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);


        $Transports=Transport::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.transport.Report.transport_report',compact('Transports'));

    }
}
