@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Transport Details</h3>

<span><p style="font-weight:bold;">Transport Name:</span> {{$transport->transportName}}</p>

<p>Transport Type: {{$transport->transportType}}</p>

<p>Location: {{$transport->location}}</p>


</div>
</div>
</div>
</div>

@endsection
