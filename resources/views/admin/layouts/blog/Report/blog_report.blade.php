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
<div class="form-row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group col-md-6">
        <form action="{{route('blog.Report.show')}}" method="post">
            @csrf
            <label for="inputPassword4">From date</label>
            <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">To date</label>
            <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <button style="margin-left: 69rem;" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">

      </div>
      <div class="form-row" id="divToPrint">

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
      <script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
      @endsection