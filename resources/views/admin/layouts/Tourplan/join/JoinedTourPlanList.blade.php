@extends('admin.welcome')
@section('traveler')
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
<h3 class="font-weight-bold">Join Tour List</h3>
<br></br>
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
        <form action="{{route('Join.Tourplan.Report.show')}}" method="post">
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
                                                <tr >
                                                    <th style=" text-align: center;" scope="col">SL</th>
                                                    <th style=" text-align: center;"scope="col">Tourplan Name</th>
                                                    <th style=" text-align: center;"scope="col">Planner name</th>
                                                    <th style=" text-align: center;"scope="col">Spot name</th>
                                                    <th style=" text-align: center;"scope="col">location name</th>
                                                    <th style=" text-align: center;"scope="col">Joined traveler name</th>
                                                    <th style=" text-align: center;"scope="col">Tourplan Status</th>

                                                    <th style=" text-align: center;"scope="col">Join Status</th>
                                                   
        
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                             
                                         
                                              @foreach($joined_tour as $key=>$data)
                                   
                                              <tr >
                              
                                                <th style=" text-align: center;">{{$key+1}}</th>
                                                <td style=" text-align: center;">{{$data->tourplan->Tourname}}</td>
                                                <td style=" text-align: center;">{{$data->tourplan->user->name}}</td>
                                                <td style=" text-align: center;">{{$data->tourplan->location->Location_name}}</td>
                                                <td style=" text-align: center;">{{$data->tourplan->spot->SpotName}}</td>
                                                <td style=" text-align: center;">{{$data->user->name}}</td>
                                                <td style=" text-align: center;">{{$data->tourplan->status}}</td>

                                                <td style=" text-align: center;">{{$data->status}}</td>
                                               

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
