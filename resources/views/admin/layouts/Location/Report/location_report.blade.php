@extends('admin.welcome')
@section('contents')
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
        <form action="{{route('location.Report.show')}}" method="post">
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
                                          
                                            <th scope="col">Location Name</th>
                                            
                                            <th scope="col">Country</th>
                                            <th scope="col">Location Image</th>
                                          
                                            <th style="width= 100px 1important;">Description</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($locations as $key=>$location)
                                      
                                      <tr>
                                      
                                        <th>{{$key+1}}</th>
                                        
                                       
                                        <td>{{$location->Location_name}}</td>

                                        <td>{{$location->Country}}</td>
                                        <td><img src="{{url('/uploads/Locations/'.$location->Location_image)}}" width="200px" alt="location image"></td>
                                        
                                        <td class="setWidth concat"><div>{{$location->LocationDetails}}</div></td>
                                        <td>
                                        <a  href="{{route('admin.location.details',$location->id)}}"><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href="{{route('admin.location.edit',$location->id)}}"><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       <a href="{{route('admin.location.delete',$location->id)}}"><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
                                        </td>
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