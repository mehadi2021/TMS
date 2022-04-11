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
    <h3 class="font-weight-bold">Contact List</h3>
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
        <form action="{{route('contact.Report.show')}}" method="post">
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

      </div>
     
                    <table class="table">
                        <div class="row">  
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center" >
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Company name</th>
                                           
                                            
                                            <th style="width= 100px 1important;">Address</th>
                                            <th style="width= 100px 1important;">Phone</th>
                                            <th style="width= 100px 1important;">email</th>
                                            <th style="width= 100px 1important;">Country</th>
                                            <th scope="col">Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($contacts as $key=>$contact)
                                      <tr>
                                      
                                        <th>{{$key+1}}</th>
                                        
                                        <td>{{$contact->company_name}}</td>
                                        <td>{{$contact->address}}</td>
                                        <td >{{$contact->phone}}</td>
                                        <td >{{$contact->email}}</td>
                                        <td >{{$contact->country}}</td>
                                        
                                        <td>
                                      
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
            </div>
        </div>
    </div>
</div>


@endsection
