@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<div class="gallary-header text-center">
				
                <div class="text-container" style="margin-top: 30px;margin-right: 7rem;margin-left: 10rem;">
                <h3 style="background-color: #00d8ffeb;text-shadow: 1px 2px 1px #0000006b;padding-bottom: 15px;margin-bottom: 4rem;color: #ffffff;border: outset;">Spots that I created</h3>
        
                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style=" text-align: center;" scope="col">SL</th>
                                            <th style=" text-align: center;"scope="col">Spot name</th>
                                            <th style=" text-align: center;"scope="col">Traveler name</th>
                                            <th style=" text-align: center;" scope="col">Spot location</th>
                                            <th style=" text-align: center;"scope="col">Spot image</th>
                                            <th style=" text-align: center;"scope="col">Spot Details</th>
                                            <th style=" text-align: center;"scope="col">Status</th>
                                            <th style=" text-align: center;"scope="col">Action</th>

                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                      @foreach($spots as $key=>$Spot)
                                      <tr>
                      
                                        <th style=" text-align: center;">{{$key+1}}</th>
                                        <td style=" text-align: center;">{{$Spot->SpotName}}</td>
                                        <td style=" text-align: center;">{{$Spot->user->name}}</td>
                                        <td style=" text-align: center;">{{$Spot->location->Location_name}}</td>
                                        <td style=" text-align: center;"><img src="{{url('/uploads/Spots/'.$Spot->SpotImage)}}" width="200px" alt="Spot image"></td>
                                        <td style=" text-align: center;"class="setWidth concat"><div>{{$Spot->SpotDetails}}</div></td>
                                        <td style=" text-align: center;">{{$Spot->status}}</td>
                                       
                                            <td style=" text-align: center;">
                                        <a  href=""><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href=""><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       @if($Spot->status=='pending')
       <a href=""><span class="ml-2"><i class="fa fa-check-square-o fa-2x"style="color:#4b49ac;" ></i></span></a>
       
       <a href=""><span class="ml-2"> <i class="fa fa-times fa-2x"style="color:#4b49ac;" ></i></span></a>
       @endif
       <a href=""><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
                                        </td>
                                     
                                      </tr>
                                      @endforeach
                                   </tbody>

                                </table>
        
        
        
        
          </div>
          </div>
          
@endsection