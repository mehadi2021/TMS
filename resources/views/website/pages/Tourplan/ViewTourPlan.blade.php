

@extends('website.master')
@section('item')

<style>
    
    a:hover{
    transform:scale(1.5);
    }
    </style>




<!-- <br><br><br><br><br> -->
<div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" >
                         <!-- <h3>Limitations Of Liability</h3> -->
                        <section id="home" class="" style="display:flex; align-items:center; background-size:contain; background-position:center;min-height: 500px; background-image: url('{{url('uploads/Spots/'.$tourplan->spot->SpotImage)}}');">
                       
			
</div>
</div>
</div>
<section id="pack" class="packages">
			<div class="container">
     
				<div class="gallary-header text-center">
				
                    <div class="text-container" style="margin-top: 30px;">
                   
                        <p style="font-size:30px;    border: dashed;
    border-color: black;
    box-shadow: 0 1px 4px">{{$tourplan->Tourname}}</p>
                        <br></br>
                        <h3 style="padding-bottom: 15px;text-decoration:underline;">About Tour Plans Location</h3>
                        <br></br>

                        <h4 style="padding-bottom: 15px;">{{$tourplan->location->Location_name}}</h4>
                        <p>{{$tourplan->location->LocationDetails}}</p>
                        <br></br>
                        <h3 style="padding-bottom: 15px;text-decoration:underline;">About Tour Plans Spot</h3>
                        <br></br>

                        <h4 style="padding-bottom: 15px;">{{$tourplan->spot->SpotName}}</h4>
                        
                        <p>{{$tourplan->spot->SpotDetails}}</p>
					<div>
					<div>

</div>
<br></br>
<h3 style="padding-bottom: 21px;text-decoration: underline">Tour Plan details</h3>
<br></br>
<div class="gallary-header text-center"style="   background-color: #00d8ff4a;
    box-shadow: 0 2px 6px black;">
				
                    <div class="text-container" >
                   
                        <h3 style="padding-bottom: 15px;">{{$tourplan->spot->SpotName}} | {{$tourplan->location->Location_name}}</h3>
                        <p><span style="color:black;">Tour name : </span>{{$tourplan->Tourname}}</p>
                        <p><span style="color:black;">Tour From : </span>{{$tourplan->from}}</p>
                        <p><span style="color:black;">Tour Destination : </span>{{$tourplan->location->Location_name}}</p>
                        <p><span style="color:black;">Tour Duration : </span>{{$tourplan->TourDuration}} day</p>
                        <p><span style="color:black;">Tour Date : </span>{{$tourplan->TourDate}}</p>
                        <p><span style="color:black;">Tour Budget : </span>{{$tourplan->TourBudget}}</p>
                        <p><span style="color:black;">Per person Budget : </span>{{$tourplan->TourBudget/$tourplan->members}}</p>
                        <p><span style="color:black;">Members Amount : </span>{{$tourplan->members}}</p>
  </div>
  </div>
  @if(auth()->user()?auth()->user()->id==$tourplan->user->id:0)  
          <div class="gallary-header text-center">
				
        <div class="text-container" style="margin-top: 30px;margin-right:70rem;border:solid;">
        <h3 style="padding-bottom: 15px;">[Join Request]</h3>
            <h3 style="padding-bottom: 15px;">{{$tourplan->spot->SpotName}} | {{$tourplan->location->Location_name}}</h3>

            <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;"scope="col">SL</th>
                                            <th style="text-align:center;"scope="col">Traveller Name</th>
                                            <th style="text-align:center;"scope="col">Status</th>
                                            

                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                 
                                      @foreach($tourplan->travelers as $key=>$traveler)
                                     
                                      <tr>
                      
                                        <th>{{$key+1}}</th>
                                        <td>{{$traveler->user->name}}</td>
                                        <td>{{$traveler->status}}</td>
                                    
                                        
                                      </tr>
                                      @endforeach
                                      
                                   </tbody>

                                </table>




  </div>
  </div>
  @endif
  @if(auth()->user()?auth()->user()->id!=$tourplan->user->id:0)  
<div class="card" style="width: 28rem;height:28rem;margin-left: 1000px;margin-top: -383px; box-shadow: 2px 2px 4px black;height: max-content;background-color:#e7ffff;">
  <!-- <img
    src="https://mdbcdn.b-cdn.net/img/new/standard/city/062.webp"
    class="card-img-top"
    alt="Chicago Skyscrapers"
  /> -->
  <div class="card-body">
   
    <h5 class="card-title"style="font-size: 23px; text-shadow: 2px 2px 2px #00000047;">Join Request</h5>
    <p class="card-text">
      If you want to join in the tour, please select the join button.For the tour planner detail select the planner profile.For any query click on Ask us.
    </p>
  </div>
  
<ul>
<a class="btn btn-default" href="{{route('query.list.view')}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Question/Answer</a>


<a class="btn btn-default" href="{{route('user.query',$tourplan->id)}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Ask Us</a>
    <a class="btn btn-default" href="{{route('profile',$tourplan->user->id)}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Planner profile</a>

    <p class="card-text">
      Please pay advance 10% amount of your budget for your join confirmation.
    </p>
    <a class="btn btn-default" href="{{route('advance.pay',$tourplan->id)}}"style="margin-bottom: 2rem;width: 200px;box-shadow: 2px 2px 2px black;color: #fff;background-color: #00d8ff;">Advance payment</a>

  </ul>
  </ul>
    <!-- <li class="list-group-item"></li> -->
    
 @endif

       
</section>


@endsection