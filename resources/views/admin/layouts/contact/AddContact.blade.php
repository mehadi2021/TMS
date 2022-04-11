@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Add Contact Info</h3>
                  @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</div>
<br></br>

<form action="{{route('contact.store')}}" method="POST" >

  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Company name</label>
      <input name="company" class="form-control" id="validationCustom01" placeholder="company"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Email</label>
      <input name="email" class="form-control" id="validationCustom01" placeholder="email"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Country</label>
      <input name="Country" class="form-control" id="validationCustom02" placeholder="Country"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Phone</label>
      <input name="phone" class="form-control" id="validationCustom02" placeholder="phone"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    </div>
   
    <div class="form-row">
  <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Address</label>
    
        <input name="address" class="form-control" id="validationCustomUsername" placeholder="address" aria-describedby="inputGroupPrepend" >
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
      </div>
</div>


      
    
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>

</form>
</div>

@endsection

