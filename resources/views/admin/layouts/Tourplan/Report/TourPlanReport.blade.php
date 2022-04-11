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
<div class="form-row">

    <div class="form-group col-md-6">
        <form action="{{route('Tourplan.Report.show')}}" method="post">
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