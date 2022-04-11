@extends('website.master')
@section('item')
<style>
    
    a:hover{
    transform:scale(1.5);
    }
    </style>
<br></br>
<br></br>
<br></br>
<div class="gallary-header text-center">
				
                <div class="text-container" style="margin-top: 30px;margin-right: 7rem;margin-left: 10rem;">
                <h3 style="background-color: #00d8ffeb;text-shadow: 1px 2px 1px #0000006b;padding-bottom: 15px;margin-bottom: 4rem;color: #ffffff;border: outset;">My Tour Plans</h3>
        
                    <table class="table text-center">
                                            <thead>
                                                <tr >
                                                    <th style=" text-align: center;" scope="col">SL</th>
                                                    <th style=" text-align: center;"scope="col">Tourplan Name</th>
                                                    <th style=" text-align: center;"scope="col">Traveler name</th>
                                                    <th style=" text-align: center;"scope="col">From</th>
                                                    <th style=" text-align: center;"scope="col">Destination</th>
                                                    <th style=" text-align: center;"scope="col">Spot name</th>

                                                    <th style=" text-align: center;"scope="col">Duration</th>
                                                    <th style=" text-align: center;"scope="col">Date</th>
                                                    <th style=" text-align: center;"scope="col">Transport</th>
                                                    <th style=" text-align: center;"scope="col">Member amount</th>
                                                    <th style=" text-align: center;"scope="col">Budget</th>
                                                    <th style=" text-align: center;"scope="col">Status</th>
                                                    <th style=" text-align: center;" scope="col">Action</th>
        
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                             
                                         
                                              @foreach($MyPlans as $key=>$MyPlan)
                                   
                                              <tr >
                              
                                                <th style=" text-align: center;">{{$key+1}}</th>
                                                <td style=" text-align: center;">{{$MyPlan->Tourname}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->user->name}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->from}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->location->Location_name}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->spot->SpotName}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->TourDuration}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->TourDate}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->transports->transportType}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->members}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->TourBudget}}</td>
                                                <td style=" text-align: center;">{{$MyPlan->status}}</td>
                                                <td style=" text-align: center;">
                                            
<a class="btn btn-primary" href="{{route('website')}}">Back</a>
<a class="btn btn-primary" href="{{route('Myplan.Edit',$MyPlan->id)}}">Edit</a>

                                                </td>

                                              </tr>
                                         
                                              @endforeach
                                              
                                           </tbody>
        
                                        </table>
        
        
        
        
          </div>
          </div>
          
@endsection