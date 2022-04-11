@extends('admin.welcome')
@section('traveler')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Tour Plan</h3>
                  
</div>
</div>
</div>
          <div class="row">
            
                  
                  
                    
                    
                  
           
              <div class="col-md-6 mb-4 stretch-card transparent">
                
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">View Tour Plan Activities</p>
                    
                    </div>
                  </div>
                </div>
           

              
                
                <div class="col-md-6 mb-4 stretch-card transparent">
                
                <div class="card card-dark-blue">
                  <div class="card-body">
                    <a href="{{route('admin.added.TourList')}}" class="mb-4">View report of tourplans</a>
                  
                  </div>
                </div>
              </div>
                  </div>
                </div>
             
           
         
        @endsection