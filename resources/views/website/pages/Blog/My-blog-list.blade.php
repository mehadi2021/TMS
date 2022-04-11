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
                <h3 style="background-color: #00d8ffeb;text-shadow: 1px 2px 1px #0000006b;padding-bottom: 15px;margin-bottom: 4rem;color: #ffffff;border: outset;">Blogs That I Created</h3>
        
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
                                      @foreach($blogs as $key=>$blog)
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
                                        <a  href="{{route('website.blog',$blog->id)}}"><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href="{{route('My.blog.edit.user',$blog->id)}}"><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       <a href="{{route('My.blog.delete',$blog->id)}}"><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
                                       
                                     
      </td>
      <td>{{$blog->status}}</td>
                                       
                                      </tr>
                                      @endforeach
                                   </tbody>
                                </table>
        
        
        
        
          </div>
          </div>
          
@endsection