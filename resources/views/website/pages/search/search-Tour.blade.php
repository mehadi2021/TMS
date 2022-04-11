@extends('website.master')
@section('contents')
<section id="spo" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                Tour Plans
            </h2>
            <p>
                Select your tour.
            </p>
        </div>
        <!--/.gallery-header-->
        <div class="packages-content">
            <div class="row">
                @if($result == null)
                @foreach($tourplans as $tourplan)
                <div class="col-md-4 col-sm-6">

                    <div class="single-package-item"
                        style="width: 370px;height: 300px; background-image:url('{{url('uploads/Spots/'.$tourplan->spot->SpotImage)}}');background-size: cover;filter: drop-shadow(2px 4px 6px grey);">

                        <div class="single-package-item-txt">

                            <h3
                                style="color:black;box-shadow: 0 0px 20px rgb(0 0 0 / 0.68);background-color: whitesmoke;font-weight: 600;">
                                <a style="font-size: inherit;"
                                    href="{{route('view.tourplan.user',$tourplan->id)}}">{{$tourplan->Tourname}}
                                </a><span class="pull-right">{{$tourplan->location->Location_name}}</span></h3>
                            <div class="packages-para" style="background-color: #0000003b;">
                                <p style="color: #ffffff;font-weight: 500;"><i
                                        class="fa fa-angle-right"></i>{{$tourplan->members}} </p>
                                <p style="color: #ffffff;font-weight: 500;"><i
                                        class="fa fa-angle-right"></i>{{$tourplan->TourBudget}}<span
                                        class="pull-right">{{$tourplan->TourDuration}}</span>
                                    <p style="color: #ffffff;font-weight: 500;">{{$tourplan->TourDate}} <span
                                            class="pull-right">{{$tourplan->user->name}}</span></p>

                            </div>
                            <!--/.packages-para-->

                            <div class="about-btn">

                                @if(auth()->user()?auth()->user()->id==$tourplan->user->id:0)
                                <a href="{{route('view.tourplan.user',$tourplan->id)}}" class="about-view packages-btn"
                                    style="float: right;">
                                    View
                                </a>

                                @else
                                <a href="{{route('request.Join',$tourplan->id)}}" class="about-view packages-btn"
                                    style="float: right;">
                                    join
                                </a>
                                @endif

                            </div>
                            <!--/.about-btn-->
                        </div>
                        <!--/.single-package-item-txt-->
                    </div>
                    <!--/.single-package-item-->

                </div>
                <!--/.col-->

                @endforeach
                @else
                @foreach($result as $data)
                <div class="col-md-4 col-sm-6">

                    <div class="single-package-item"
                        style="width: 370px;height: 300px; background-image:url('{{url('uploads/Spots/'.$data->spot->SpotImage)}}');background-size: cover;filter: drop-shadow(2px 4px 6px grey);">

                        <div class="single-package-item-txt">

                            <h3
                                style="color:black;box-shadow: 0 0px 20px rgb(0 0 0 / 0.68);background-color: whitesmoke;font-weight: 600;">
                                <a style="font-size: inherit;"
                                    href="{{route('view.tourplan.user',$data->id)}}">{{$data->Tourname}}
                                </a><span class="pull-right">{{$data->location->Location_name}}</span></h3>
                            <div class="packages-para" style="background-color: #0000003b;">
                                <p style="color: #ffffff;font-weight: 500;"><i
                                        class="fa fa-angle-right"></i>{{$data->members}} </p>
                                <p style="color: #ffffff;font-weight: 500;"><i
                                        class="fa fa-angle-right"></i>{{$data->TourBudget}}<span
                                        class="pull-right">{{$data->TourDuration}}</span>
                                    <p style="color: #ffffff;font-weight: 500;">{{$data->TourDate}} <span
                                            class="pull-right">{{$data->user->name}}</span></p>

                            </div>
                            <!--/.packages-para-->

                            <div class="about-btn">

                                @if(auth()->user()?auth()->user()->id==$data->user->id:0)
                                <a href="{{route('view.tourplan.user',$data->id)}}" class="about-view packages-btn"
                                    style="float: right;">
                                    View
                                </a>

                                @else
                                <a href="{{route('request.Join',$data->id)}}" class="about-view packages-btn"
                                    style="float: right;">
                                    join
                                </a>
                                @endif

                            </div>
                            <!--/.about-btn-->
                        </div>
                        <!--/.single-package-item-txt-->
                    </div>
                    <!--/.single-package-item-->

                </div>
                @endforeach
                @endif

            </div>
            <!--/.row-->
        </div>
        <!--/.packages-content-->

    </div>
    <!--/.container-->

</section>
@endsection