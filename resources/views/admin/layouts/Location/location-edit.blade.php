@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">location Create</h3>
                  @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
</div>
</div>
</div>
</div>
<form action="{{route('admin.location.update',$location->id)}}" method="POST" enctype="multipart/form-data">
@method('PUT')
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Location name</label>
      <input name="LocationName" value="{{$location->Location_name}}" class="form-control" id="validationCustom01" placeholder="location name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Country</label>
      <input name="Country" value="{{$location->Country}}"class="form-control" id="validationCustom02" placeholder="Country"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    </div>
   
    <div class="form-row">
  <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Location details</label>
    
        <input name="Locationdetails" value="{{$location->LocationDetails}}"class="form-control" id="validationCustomUsername" placeholder="detail" aria-describedby="inputGroupPrepend" >
        <div class="valid-feedback">
          
        
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Location Image</label>
    
        <input name="location_image" type="file"class="form-control" id="validationCustomUsername" placeholder="Location image" aria-describedby="inputGroupPrepend" >
        <div class="valid-feedback">
          
        
      </div>
    </div>
    </div>
  
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
     
      
    
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>

</form>
</div>
@endsection

