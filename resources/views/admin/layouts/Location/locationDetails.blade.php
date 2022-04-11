@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Location Details</h3>

    <p>
        <img style="border-radius: 4px;" width="600px;" src=" {{url('/uploads/Locations/'.$location->Location_image)}}" alt="Blog">
    </p>
<span><p style="font-weight:bold;">Location Name:></span> {{$location->Location_name}}</p>

<p>Country: {{$location->Country}}</p>

<p>Description: {{$location->LocationDetails}}</p>


</div>
</div>
</div>
</div>

@endsection