@extends('admin.welcome')
@section('traveler')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Tour Plan Details</h3>   
                  </div>
                  </div>
                  </div>
                  </div>
          <div class="row">
            <div class="col-md-6 grid-margin transparent">
              <div class="column">
              
                
                    <h4 class="mb-4"><span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Tour Name:</span>  {{$tourplan->Tourname}}</h4>
                    <div class="mb-4">
                      <p><h4> <span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Plan Created Traveler name:</span>  {{$tourplan->Travelar_name}}
                      <span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Tour Spot:</span> {{$tourplan->TourSpot}}</h4><p>
</div>
<div class="mb-4">
                    <p>
                        <h4><span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Duration:</span>  {{$tourplan->TourDuration}}
                    <span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Transport:</span>  {{$tourplan->Transport}}
</h4></p>
                </div>
                    <div class="mb-4">
</p> <h4><span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Amount of Members:</span>  {{$tourplan->members}}
                    <span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Total Budget:</span>  {{$tourplan->TourBudget}}
</h4></p>
</div>
                    <div class="mb-4">
                   <p><h4> <span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Duration:</span>  {{$tourplan->TourDuration}}
                    <span  style="font-weight: bold; color: ghostwhite;background-color: #4747a1;border-radius: 7px;">Tour Date:</span>  {{$tourplan->TourDate}}
</h4></p>
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
              </div>
            </div>
        </div>
        @endsection