@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Create Blog</h3>
                  @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
<form action="{{route('admin.Store.Blog')}}" method="POST" enctype="multipart/form-data">

  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Blog Name</label>
      <input name="BlogName" class="form-control" id="validationCustom01" placeholder="Tour Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="validationCustom02">Location</label>
    <select name="Location" class="form-control"  placeholder="spot location"  required>
      @foreach($location as $location)
      <option value="{{$location->id}}">{{$location->Location_name}}</option> 
      @endforeach  
    </select>
     
   
      <div class="valid-feedback">
        Looks good!
      </div>
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Date</label>
      <input name="Date" class="form-control" id="validationCustom02" type="datetime-local" placeholder="Date"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">blogger Name</label>
      <select name="blogger_name" class="form-control" id="validationCustom02" placeholder="spot location"  required>

@foreach($user as $user)
      <option value="{{$user->id}}">{{$user->name}}</option> 
      @endforeach  
    </select>
      <div class="valid-feedback">
        Looks good!
      </div>
      </div>
    </div>
    
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Blog Image</label>
    
        <input name="BlogImage" class="form-control"  type="file" id="" placeholder="image">
        <input name="SecondBlogImage" class="form-control"  type="file" id="" placeholder="image">
        <input name="ThirdBlogImage" class="form-control"  type="file" id="" placeholder="image">
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
    </div>
    </div>
    <div class="form-row">
  <div class="col-md-8 mb-3">
      <label for="validationCustomUsername">About</label>
    
        <input name="Description" class="form-control" id="validationCustomUsername" placeholder="detail" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
    </div>
    </div>
    <div class="form-row">
  <div class="col-md-8 mb-3">
      <label for="validationCustomUsername">Description</label>
    
        <input name="Description2" class="form-control" id="validationCustomUsername" placeholder="detail" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
          Please choose a username.
        
      </div>
    </div>
    </div>
    <div class="form-row">
  <div class="col-md-8 mb-3">
      <label for="validationCustomUsername">Other details</label>
    
        <input name="Description3" class="form-control" id="validationCustomUsername" placeholder="detail" aria-describedby="inputGroupPrepend" required>
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
      
      
  <button class="btn btn-primary" type="submit">Submit form</button>
</div>
</div>

</div>
</form>
@endsection

