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
                    <h3 class="font-weight-bold">Blog List</h3>
                  
                    <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <ul class="navbar-nav mr-lg-2">
                        
                        <form action="{{route('admin.blog.blogList')}}" method="get">
                       
                        
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
        <p style="text-align: center;">You are searching for: {{$key}}. Found {{$Blogs->count()}} results.<span><a href="{{route('admin.blog.blogList')}}">Go to List</a></span></p>

        @endif

          
        

                    @if(session()->has('success'))
                            <p class="alert alert-success">
                                {{session()->get('success')}}
</p>
@endif
                    <table class="table">
                        <div class="row">  
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center" >
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Blog name</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Blogger Name</th>
                                            <th scope="col">Blog Image</th>
                                            <th scope="col">Second Blog Image</th>
                                            <th scope="col">Third Blog Image</th>
                                            <th style="width= 100px 1important;">About</th>
                                            <th style="width= 100px 1important;">Description</th>
                                            <th style="width= 100px 1important;">Other details</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($Blogs as $key=>$blog)
                                      <tr>
                                      
                                        <th>{{$key+1}}</th>
                                        
                                        <td>{{$blog->BlogName}}</td>
                                        <td>{{$blog->location->Location_name}}</td>
                                        <td>{{$blog->Date}}</td>
                                        <td>{{$blog->user->name}}</td>
                                        <td><img src="{{url('/uploads/Blogs/'.$blog->Blogimage)}}" width="200px" alt="Blog image"></td>
                                        <td><img src="{{url('/uploads/Blogs/secondimage/'.$blog->SecondBlogimage)}}" width="200px" alt="Blog image"></td>
                                        <td><img src="{{url('/uploads/Blogs/thirdimage/'.$blog->ThirdBlogimage)}}" width="200px" alt="Blog image"></td>
                                        <td class="setWidth concat"><div>{{$blog->Description}}</div></td>
                                        <td class="setWidth concat"><div>{{$blog->Description2}}</div></td>
                                        <td class="setWidth concat"><div>{{$blog->Description3}}</div></td>
                                        
                                        <td>
                                        <a  href="{{route('admin.blog.details',$blog->id)}}"><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href="{{route('admin.Edit.blog',$blog->id)}}"><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       <a href="{{route('admin.delete.blog',$blog->id)}}"><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
                                       
                                        @if($blog->status=='pending')
       <a href="{{route('admin.approve.blog',$blog->id)}}"><span class="ml-2"><i class="fa fa-check-square-o fa-2x"style="color:#4b49ac;" ></i></span></a>
       
       <a href="{{route('admin.decline.blog',$blog->id)}}"><span class="ml-2"> <i class="fa fa-times fa-2x"style="color:#4b49ac;" ></i></span></a>
       @endif
      </td>
      <td>{{$blog->status}}</td>
                                       
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
