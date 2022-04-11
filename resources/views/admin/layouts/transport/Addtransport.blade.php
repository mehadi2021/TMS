@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Transport Create</h3>
                  @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
<form action="{{route('Admin.Transport.Store')}}" method="POST" enctype="multipart/form-data">

  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Transport name</label>
      <input name="TransportName" class="form-control" id="validationCustom01" placeholder="Tour Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Transport Type</label>
      <input name="TransportType" class="form-control" id="validationCustom02" placeholder="Destination"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">location</label>
    
        <input name="location" class="form-control" id="validationCustomUsername" placeholder="Duration" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.
        
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
      </div>
      
      </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>
</div>
</div>
</form>
@endsection

