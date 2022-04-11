@extends('admin.welcome')
@section('contents')
<div class="content-wrapper"style="overflow-y:scroll;">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br></br>
<div class="form-row">

    <div class="form-group col-md-6">
        <form action="{{route('spot.Report.show')}}" method="post">
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

      <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Spot name</th>
                                            <th scope="col">Spot location</th>
                                            <th scope="col">Spot image</th>
                                            <th scope="col">Spot Details</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                      @foreach($spots as $key=>$Spot)
                                      <tr>
                      
                                        <th>{{$key+1}}</th>
                                        <td>{{$Spot->SpotName}}</td>
                                        <td>{{$Spot->location->Location_name}}</td>
                                        <td><img src="{{url('/uploads/Spots/'.$Spot->SpotImage)}}" width="200px" alt="Spot image"></td>
                                        <td class="setWidth concat"><div>{{$Spot->SpotDetails}}</div></td>
                                       
                                            <td>
                                        <a  href="{{route('admin.spot.details',$Spot->id)}}"><i class="fa fa-eye fa-2x"style="color: #4b49ac;"></i></a>
       <a href=""><span class="ml-2"><i class="fa fa-pencil-square fa-2x"style="color: #4b49ac;"></i></span></a>
       <a href=""><span class="ml-2"><i class="fa fa-trash fa-2x"style="color:red;"></i></span></a>
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