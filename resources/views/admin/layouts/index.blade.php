@extends('admin.welcome')
@section('contents')

<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                  
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="backend/images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      
                      <div class="ml-2">
                        <h4 class="location font-weight-bold">Lets Plan a Tour </h4>
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number of traveler</p>
                      <p class="fs-30 mb-2"> {{$count['travelers']}}</p>
                      <p>0</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total thrown plan</p>
                      <p class="fs-30 mb-2">{{$count['tourplans']}}</p>
                      <p> {{ $count['pending_tourplans']}} Pending</p>
                      <p>{{ $count['Approved_tourplans']}} Approved</p>
                      <p>{{$count['Declined_tourplans']}} Declined</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Locations</p>
                      <p class="fs-30 mb-2">{{$count['location']}}</p>
                      <p>{{$count['spot']}} Spots</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Blogs</p>
                      <p class="fs-30 mb-2">{{$count['blogs']}}</p>
                      <p>{{$count['pending_blogs']}} Pending blogs</p>
                      <p>{{$count['Approved_blogs']}} Approved blogs</p>
                      <p>{{ $count['Declined_blogs']}} Declined blogs</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            
                         
          
                  </div>
                </div>
              </div>
            </div>
        </div>

    @endsection