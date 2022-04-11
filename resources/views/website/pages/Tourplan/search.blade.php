@extends('website.master')
@section('contents')

<section class="travel-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-travel-boxes">
                    <div id="desc-tabs" class="desc-tabs">

                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                                    <i class="fa fa-tree"></i>
                                    tours
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active fade in" id="tours">
                                <div class="tab-para">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <form action="{{route('search.plan')}}"method="GET">
                                                <div class="single-tab-select-box">

                                                    <h2>destination</h2>

                                                    <div class="travel-select-icon">
                                                        <select name="spot" class="form-control ">
                                                            @foreach($spots as $spot)
                                                            <option value="{{$spot->id}}">{{$spot->SpotName}}</option>
                                                            <!-- /.option-->
                                                            @endforeach

                                                        </select><!-- /.select-->
                                                    </div><!-- /.travel-select-icon -->
                                                </div>
                                                <div class="single-tab-select-box">

                                                    <h2>destination</h2>

                                                    <div class="travel-select-icon">
                                                        <select name="location" class="form-control ">
                                                            @foreach($locations as $location)
                                                            <option value="{{$location->id}}">{{$location->Location_name}}</option>
                                                            <!-- /.option-->
                                                            @endforeach
                                                        

                                                        </select><!-- /.select-->
                                                    </div><!-- /.travel-select-icon -->
                                                </div>
                                                <!--/.single-tab-select-box-->
                                                <button class="btn btn-info">Search</button>
                                            </form>
                                        </div>
                                        <!--/.col-->



                                      
                                                </div><!-- /.travel-select-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="travel-budget">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4">
                                                        <h3>budget : </h3>
                                                    </div>
                                                    <!--/.col-->
                                                    <div class="co-md-9 col-sm-8">
                                                        <div class="travel-filter">
                                                            <div class="info_widget">
                                                                <div class="price_filter">

                                                                    <div id="slider-range"></div>
                                                                    <!--/.slider-range-->

                                                                    <div class="price_slider_amount">
                                                                        <input type="text" id="amount" name="price"
                                                                            placeholder="Add Your Price" />
                                                                    </div>
                                                                    <!--/.price_slider_amount-->
                                                                </div>
                                                                <!--/.price-filter-->
                                                            </div>
                                                            <!--/.info_widget-->
                                                        </div>
                                                        <!--/.travel-filter-->
                                                    </div>
                                                    <!--/.col-->
                                                </div>
                                                <!--/.row-->
                                            </div>
                                            <!--/.travel-budget-->
                                        </div>
                                        <!--/.col-->
                                        <div class="clo-sm-7">
                                            <div class="about-btn travel-mrt-0 pull-right">
                                                <a class="about-view travel-btn"type="submit" value="search">
                                                    search
</a>
                                                <!--/.travel-btn-->
                                            </div>
                                            <!--/.about-btn-->
                                        </div>
                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                </div>
                                <!--/.tab-para-->

                            </div>
                    



<section id="pack" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                special Spots
            </h2>
            <p>
                Select your favorite spot and make your tour plan.
            </p>
        </div>
        <!--/.gallery-header-->
        <div class="packages-content">
            <div class="row">
                @foreach($spots as $spot)
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item" style="height: 500px;">
                        <img style="height:200px;" src="{{url('uploads/Spots/'.$spot->SpotImage)}}" alt="package-place">
                        <div class="single-package-item-txt">
                            <h3>{{$spot->SpotName}} <span class="pull-right">{{$spot->location->Location_name}}</span>
                            </h3>
                            <div class="packages-para" style="overflow: hidden;text-overflow: ellipsis;">
                                <p style="height: 100px;"><i class="fa fa-angle-right"></i>{{$spot->SpotDetails}} </p>

                            </div>
                            <!--/.packages-para-->

                            <div class="about-btn">
                                <button class="about-view packages-btn" type="submit">
                                    <a href="{{route('user.tourplan')}}">Plan tour</a>
                                </button>
                            </div>
                            <!--/.about-btn-->
                        </div>
                        <!--/.single-package-item-txt-->
                    </div>
                    <!--/.single-package-item-->

                </div>
                <!--/.col-->
                @endforeach


            </div>
            <!--/.row-->
        </div>
@endsection