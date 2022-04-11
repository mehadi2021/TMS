@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<div class="gallary-header text-center">
				
                <div class="text-container" style="margin-top: 30px;margin-right: 7rem;margin-left: 10rem;">
                <h3 style="background-color: #00d8ffeb;text-shadow: 1px 2px 1px #0000006b;padding-bottom: 15px;margin-bottom: 4rem;color: #ffffff;border: outset;">Plans That I Joined</h3>
        
                    <table class="table text-center">
                                            <thead>
                                                <tr >
                                                    <th style=" text-align: center;" scope="col">SL</th>
                                                    <th style=" text-align: center;"scope="col">Your Name</th>
                                                    <th style=" text-align: center;"scope="col">Tourplan Name</th>
                                                    <th style=" text-align: center;"scope="col">Planner name</th>
                                                    <th style=" text-align: center;"scope="col">Gender</th>
                                                    <th style=" text-align: center;"scope="col">Location Name</th>
                                                    <th style=" text-align: center;"scope="col">Spot Name</th>
                                                    <th style=" text-align: center;"scope="col">Date</th>
                                                    <th style=" text-align: center;"scope="col">Duration</th>
                                                    <th style=" text-align: center;"scope="col">members</th>
                                                    <th style=" text-align: center;"scope="col">Budget</th>
                                                    <th style=" text-align: center;"scope="col">Your budget amount</th>
                                                    <th style=" text-align: center;"scope="col">Status</th>
                                                    <th style=" text-align: center;"scope="col">Advance pay</th>
                                                    <th style=" text-align: center;"scope="col">payment status</th>
                                                  
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                              @foreach($joinedplan as $key=>$joinedplan)
                                             
                                              <tr >
                                            
                                                <th style=" text-align: center;">{{$key+1}}</th>
                                                <td style=" text-align: center;">{{$joinedplan->user->name }}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->Tourname}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->user->name}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->user->Gender}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->location->Location_name}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->spot->SpotName}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->TourDate}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->TourDuration}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->members}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->tourplan->TourBudget}}</td>
                                                <td style=" text-align: center;">{{round($joinedplan->tourplan->TourBudget/$joinedplan->tourplan->members)}}</td>
                                                <td style=" text-align: center;">{{$joinedplan->status}}</td>
                                                <td>
                                               
                                                
                                                 <a class="btn btn-primary"style=" text-align: center;" href="{{route('advance.pay',$joinedplan->id)}}">click here</a>
                                         
                                                </td>
                                                <td>
                                               
                                                
                                               <a class="btn btn-primary"style=" text-align: center;" href="{{route('join.payment.info',$joinedplan->id)}}">view</a>
                                       
                                              </td>
                                                
                                               
                                                <td style=" text-align: center;"></td>

                                             
                                              @endforeach
                                              
                                           </tbody>
        
                                        </table>
        
        
        
        
          </div>
          </div>
          
@endsection