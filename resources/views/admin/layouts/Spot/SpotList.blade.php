@extends('admin.welcome')
@section('contents')
<style>
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
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Spot List</h3>
                    <table class="table">
                        <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <ul class="navbar-nav mr-lg-2">
                        
                        <form action="{{route('admin.Spotlist')}}" method="get">
                       
                        
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
        <p style="text-align: center;">You are searching for: {{$key}}. Found {{$Spots->count()}} results.<span><a href="{{route('admin.blog.blogList')}}">Go to List</a></span></p>

        @endif
                            <div class="col-md-8 grid-margin">
                                <div>
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Spot name</th>
                                            <th scope="col">Traveler name</th>
                                            <th scope="col">Spot location</th>
                                            <th scope="col">Spot image</th>
                                            <th scope="col">Spot Details</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                      @foreach($Spots as $key=>$Spot)
                                      <tr>
                      
                                        <th>{{$key+1}}</th>
                                        <td>{{$Spot->SpotName}}</td>
                                        <td>{{$Spot->user->name}}({{$Spot->user->role}})</td>
                                        <td>{{$Spot->location->Location_name}}</td>
                                        <td><img src="{{url('/uploads/Spots/'.$Spot->SpotImage)}}" width="200px" alt="Spot image"></td>
                                        <td class="setWidth concat"><div>{{$Spot->SpotDetails}}</div></td>
                                        <td >{{$Spot->status}}</td>
                                       
                                            <td>
                                        <a  href="{{route('admin.spot.details',$Spot->id)}}"><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href=""><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       @if($Spot->status=='pending')
       <a href="{{route('admin.user.spot.approve',$Spot->id)}}"><span class="ml-2"><i class="fa fa-check-square-o fa-2x"style="color:#4b49ac;" ></i></span></a>
       
       <a href="{{route('admin.user.spot.decline',$Spot->id)}}"><span class="ml-2"> <i class="fa fa-times fa-2x"style="color:#4b49ac;" ></i></span></a>
       @endif
       <a href="{{route('admin.delete.spot',$Spot->id)}}"><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
                                        </td>
                                     
                                      </tr>
                                      @endforeach
                                   </tbody>

                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
