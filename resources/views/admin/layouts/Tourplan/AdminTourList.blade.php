@extends('admin.welcome')
@section('contents')
<style>
a:hover i {
            transform: scale(1.5);
        }
        .setWidth{
        max-width:100px;
    }
    .concat div{
        overflow:hidden;
        -ms-text-overflow:ellipsis;
        -o-text-overflow:ellipsis;
        text-overflow:ellipsis;
        white-space:nowrap;
        width:inherit;
    }
</style>
<div class="content-wrapper"style="overflow-y:scroll;">

  @if(session()->has('success'))
  <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
    @if(session()->has('error'))
  <p class="alert alert-danger">
            {{session()->get('error')}}
        </p>
    @endif
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Added Tour List</h3>
                 

                 

                  
                <ul class="navbar-nav mr-lg-4">
                        
                        <form action="{{route('admin.added.TourList')}}" method="get">
                       
                        
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search"style="display: contents;">
                        
                    <button class="btn" type="submit"><i class="icon-search" ></i></button>
                    </span>
                  </div>
                  
                 
                  <input type="text" name="search" value="{{$key}}"class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
         
              </li>
    </form>  
            </ul>           
</div>
</div>

@if($key)
        <p style="text-align: center;">You are searching for: {{$key}}. Found {{$Tourplans->count()}} results.<span><a href="{{route('admin.added.TourList')}}">Go to List</a></span></p>

        @endif
       


                        <div class="row">  
                            <div class="col-md-8 grid-margin">
<table class="table">
  <thead style="text-align: center">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Tour Name</th>
      <th scope="col">From</th>
      <th scope="col">Destination</th>
      <th scope="col">Spot</th>
      <th scope="col">Duration</th>
      <th scope="col">Transport</th>
      <th scope="col">Members</th>
      <th scope="col">Tour Date</th>
      <th scope="col">Budget</th>
      <th scope="col">Traveler Name</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($Tourplans as $key=>$Tourplan)

    <tr style="text-align: center">
      <th>{{$key+1}}</th>
      <td>{{$Tourplan->Tourname}}</td>
      <td>{{$Tourplan->from}}</td>
      <td>{{$Tourplan->location->Location_name}}</td>
      <td>{{$Tourplan->spot->SpotName}}</td>
      <td>{{$Tourplan->TourDuration}}</td>
      <td>{{$Tourplan->transports->transportType}}</td>
      <td>{{$Tourplan->members}}</td>
      <td>{{$Tourplan->TourDate}}</td>
      <td>{{$Tourplan->TourBudget}}</td>
      <td>{{$Tourplan->user->name}}</td>
      <td>
      <a  href="{{route('view.tourplan.details',$Tourplan->id)}}"><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href="{{route('admin.tourplan.delete',$Tourplan->id)}}"><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
       @if($Tourplan->status=='pending')
       <a href="{{route('admin.approve.Tour',$Tourplan->id)}}"><span class="ml-2"><i class="fa fa-check-square-o fa-2x"style="color:#4b49ac;" ></i></span></a>
       
       <a href="{{route('admin.decline.Tour',$Tourplan->id)}}"><span class="ml-2"> <i class="fa fa-times fa-2x"style="color:#4b49ac;" ></i></span></a>
       @endif
      </td>
      <td>{{$Tourplan->status}}</td>
    
    </tr>
  
    @endforeach
  </tbody>
</table>
</div>
                  
                   
                </div>
            </div>
        </div>
    
@endsection