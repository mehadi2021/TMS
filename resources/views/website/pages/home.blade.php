@extends('website.master')
@section('contents')

<section id="home" class="about-us">

    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="single-about-us">
                        <div class="about-us-txt">
                            <h2>
                                Explore the Beauty of the Beautiful World

                            </h2>
                            <div class="about-btn">
                                <button class="about-view"href="">
                                    explore now
                                </button>
                            </div>
                            <!--/.about-btn-->
                        </div>
                        <!--/.about-us-txt-->
                    </div>
                    <!--/.single-about-us-->
                </div>
                <!--/.col-->
                <div class="col-sm-0">
                    <div class="single-about-us">

                    </div>
                    <!--/.single-about-us-->
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>
        <!--/.about-us-content-->
    </div>
    <!--/.container-->

</section>
<!--/.about-us-->
<!--about-us end -->

<!--travel-box start-->
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
                                            <form action="{{route('search.plan')}}" method="post">
                                                @csrf
                                                <div class="single-tab-select-box">

                                                    <h2>destination</h2>

                                                    <div >
                                                        <input type="text" class="form-control" style="width: 91rem;height: 52px;
    padding: 7px 8px;" name="search">


                                                    </div><!-- /.travel-select-icon -->
                                                </div>

                                                <!--/.single-tab-select-box-->
                                                <button style="    margin-top: -8rem; margin-left: 93rem;width: 12rem;height: 5rem;box-shadow: 0px 2px 6px #141414bf;background-color: #00d8ff;"type="submit" class="btn btn-info">Search</button>
                                            </form>
                                        </div>
                                        <!--/.col-->




                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                    <div class="row">

                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                </div>
                                <!--/.tab-para-->

                            </div>
                            <!--/.tabpannel-->

                            <div role="tabpanel" class="tab-pane fade in" id="hotels">
                                <div class="tab-para">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>destination</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination country</option>
                                                        <!-- /.option-->

                                                        <option value="turkey">turkey</option><!-- /.option-->

                                                        <option value="russia">russia</option><!-- /.option-->
                                                        <option value="egept">egypt</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                              
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                    <div class="row">
                                        <div class="col-sm-5"></div>
                                        <!--/.col-->
                                        <div class="clo-sm-7">
                                            <div class="about-btn travel-mrt-0 pull-right">
                                                <button class="about-view travel-btn">
                                                    search
                                                </button>
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
                            <!--/.tabpannel-->
                            <!-- flight search -->
                            <div role="tabpanel" class="tab-pane fade in" id="flights">
                                <div class="tab-para">
                                    <div class="trip-circle">
                                        <div class="single-trip-circle">
                                            <input type="radio" id="radio01" name="radio" />
                                            <label for="radio01">
                                                <span class="round-boarder">
                                                    <span class="round-boarder1"></span>
                                                </span>round trip
                                            </label>
                                        </div>
                                        <!--/.single-trip-circle-->
                                        <div class="single-trip-circle">
                                            <input type="radio" id="radio02" name="radio" />
                                            <label for="radio02">
                                                <span class="round-boarder">
                                                    <span class="round-boarder1"></span>
                                                </span>on way
                                            </label>
                                        </div>
                                        <!--/.single-trip-circle-->
                                    </div>
                                    <!--/.trip-circle-->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>from</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your location</option>
                                                        <!-- /.option-->

                                                        <option value="turkey">turkey</option><!-- /.option-->

                                                        <option value="russia">russia</option><!-- /.option-->
                                                        <option value="egept">egypt</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>departure</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="departure" class="form-control"
                                                            data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                        <div class="col-lg-2 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>return</h2>
                                                <div class="travel-check-icon">
                                                    <form action="#">
                                                        <input type="text" name="return" class="form-control"
                                                            data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                    </form>
                                                </div><!-- /.travel-check-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>adults</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">5</option><!-- /.option-->

                                                        <option value="10">10</option><!-- /.option-->

                                                        <option value="15">15</option><!-- /.option-->
                                                        <option value="20">20</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                        <div class="col-lg-2 col-md-1 col-sm-4">
                                            <div class="single-tab-select-box">
                                                <h2>childs</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">1</option><!-- /.option-->

                                                        <option value="2">2</option><!-- /.option-->

                                                        <option value="4">4</option><!-- /.option-->
                                                        <option value="8">8</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="single-tab-select-box">

                                                <h2>to</h2>

                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter your destination location</option>
                                                        <!-- /.option-->

                                                        <option value="istambul">istambul</option><!-- /.option-->

                                                        <option value="mosko">mosko</option><!-- /.option-->
                                                        <option value="cairo">cairo</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->

                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="single-tab-select-box">

                                                <h2>class</h2>
                                                <div class="travel-select-icon">
                                                    <select class="form-control ">

                                                        <option value="default">enter class</option><!-- /.option-->

                                                        <option value="A">A</option><!-- /.option-->

                                                        <option value="B">B</option><!-- /.option-->
                                                        <option value="C">C</option><!-- /.option-->

                                                    </select><!-- /.select-->
                                                </div><!-- /.travel-select-icon -->
                                            </div>
                                            <!--/.single-tab-select-box-->
                                        </div>
                                        <!--/.col-->
                                        <div class="clo-sm-5">
                                            <div class="about-btn pull-right">
                                                <button class="about-view travel-btn">
                                                    search
                                                </button>
                                                <!--/.travel-btn-->
                                            </div>
                                            <!--/.about-btn-->
                                        </div>
                                        <!--/.col-->

                                    </div>
                                    <!--/.row-->

                                </div>

                            </div>
                            <!--/.tabpannel-->

                        </div>
                        <!--/.tab content-->
                    </div>
                    <!--/.desc-tabs-->
                </div>
                <!--/.single-travel-box-->
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->

</section>
<!--/.travel-box-->
<!--travel-box end-->

<!--service start-->
<section id="service" class="service">
    <div class="container">

        <div class="service-counter text-center">

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <img src="{{url('/frontend/assets/images/service/s1.png')}}" alt="service-icon" />
                    </div>
                    <!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                                Choose amazing tour packages
                            </a>
                        </h2>
                        <p>Must use our tour Planner for breathtaking tour packages!</p>
                    </div>
                    <!--/.service-content-->
                </div>
                <!--/.single-service-box-->
            </div>
            <!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="service-img">
                        <img src="{{url('/frontend/assets/images/service/s2.png')}}" alt="service-icon" />
                    </div>
                    <!--/.service-img-->
                    <div class="service-content">
                        <h2>
                            <a href="#">
                                Choose your prefered locations
                            </a>
                        </h2>
                        <p>This amazing site helps you book the best hotels all around the world!</p>
                    </div>
                    <!--/.service-content-->
                </div>
                <!--/.single-service-box-->
            </div>
            <!--/.col-->

            <div class="col-md-4 col-sm-4">
                <div class="single-service-box">
                    <div class="statistics-img">
                        <img src="{{url('/frontend/assets/images/service/s3.png')}}" alt="service-icon" />
                    </div>
                    <!--/.service-img-->
                    <div class="service-content">

                        <h2>
                            <a href="#">
                                join in tour plan and enjoy tour
                            </a>
                        </h2>
                        <p>Book your flight instantly using TourNest!</p>
                    </div>
                    <!--/.service-content-->
                </div>
                <!--/.single-service-box-->
            </div>
            <!--/.col-->

        </div>
        <!--/.statistics-counter-->
    </div>
    <!--/.container-->

</section>
<!--/.service-->
<!--service end-->

<!--galley start-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="gallery-details">
            <div class="gallary-header text-center">
                <h2>
                    top destination
                </h2>
                <p>
                    Where do you wanna go? How much you wanna explore?
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="gallery-box">
                <div class="gallery-content">
                    <div class="filtr-container">
                        <div class="row">
                            @foreach($locations as $location)

                            <div class="col-md-6">
                                <div class="filtr-item">
                                    <img src="{{url('/uploads/Locations/'.$location->Location_image)}}"
                                        alt="portfolio image" />
                                    <div class="item-title">
                                        <a href="{{route('website.view.location',$location->id)}}">
                                            {{$location->Location_name}}
                                        </a>
                                        <p><span>{{$location->Country}}</span>

                                            <span>{{$location->spots?count($location->spots):0}} </span>

                                        </p>

                                    </div><!-- /.item-title -->
                                </div><!-- /.filtr-item -->

                            </div><!-- /.col -->

                            @endforeach

                        </div><!-- /.row -->

                    </div><!-- /.filtr-container-->

                </div><!-- /.gallery-content -->
            </div>
            <!--/.galley-box-->
        </div>
        <!--/.gallery-details-->
    </div>
    <!--/.container-->

</section>
<!--/.gallery-->
<!--gallery end-->


<!--discount-offer start-->
<!-- /.discount-offer-->
<!--discount-offer end-->

<!--packages start-->
<section id="pack" class="packages">
    <div class="container">
        <div class="gallary-header text-center">
            <h2>
                special Spots
            </h2>
            <p>
                Select your favorite spot and make your tour plan or <span><a href="{{route('add.spot.user')}}">Add
                        spot</a></span>
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
        <!--/.packages-content-->
        <!--Modal: Login with Avatar Form-->
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="defaultForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="defaultForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->

</section>
<!--/.packages-->
<!--packages end-->
<!--packages start-->
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
                                        class="fa fa-angle-right"></i>Members Amount : {{$tourplan->members}} </p>
                                <p style="color: #ffffff;font-weight: 500;"><i
                                        class="fa fa-angle-right"></i>Tour Budget : {{$tourplan->TourBudget}}<span
                                        class="pull-right">Tour Duration : {{$tourplan->TourDuration}} day</span>
                                    <p style="color: #ffffff;font-weight: 500;">Tour Date :{{$tourplan->TourDate}} <span
                                            class="pull-right">Planner :{{$tourplan->user->name}}</span></p>

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
<!--/.packages-->
<!--packages end-->
<!-- testemonial Start -->
<section class="testemonial">
    <div class="container">

        <div class="gallary-header text-center">
            <h2>
                clients reviews
            </h2>
            <p>
                Tour plan reviews of travelers.
                <a href="{{route('user.review')}}">add review</a>
            </p>

        </div>
        <!--/.gallery-header-->

        <div class="owl-carousel owl-theme" id="testemonial-carousel">
            @foreach($reviews as $review)
            <div class="home1-testm item">
                <div class="home1-testm-single text-center" style="    height: 42rem;">
                    <div class="home1-testm-img">
                        <img src="{{url('/uploads/users/'.$review->user->image)}}" alt="img" />
                    </div>
                    <!--/.home1-testm-img-->
                    <div class="home1-testm-txt">
                        <span class="icon section-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </span>
                        <h4>{{$review->spot->SpotName}},{{$review->location->Location_name}}</h4>
                        <p>
                            {{$review->review}}
                        </p>
                        <h3>
                            <a href="#">
                                {{$review->user->name}}
                            </a>
                        </h3>
                        <h4>{{$review->user->Address}}</h4>
                    </div>
                    <!--/.home1-testm-txt-->
                </div>
                <!--/.home1-testm-single-->

            </div>
            <!--/.item-->
            @endforeach
        </div>
        <!--/.testemonial-carousel-->
    </div>
    <!--/.container-->

</section>
<!--/.testimonial-->
<!-- testemonial End -->


<!--special-offer start-->
<!--section id="spo" class="special-offer"-->
<!--/.special-offer end-->
<!--special-offer end-->

<!--blog start-->
<section id="blog" class="blog">
    <div class="container">
        <div class="blog-details">
            <div class="gallary-header text-center">
                <h2>
                    Blog
                </h2>
                <p>
                    Travel Blogs from all over the world and <a style="font-size :14px;"
                        href="{{route('Add.blog')}}">Add Blog.</a>
                </p>
            </div>
            <!--/.gallery-header-->

            <div class="blog-content">
                <div class="row">
                    @foreach($Blogs as $key=>$blog)
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail" style="width:374px;    height: 66rem;">
                            <h2>{{$blog->location->Location_name}}<span
                                    style="float:right; padding-right:15px;font-size:12px">{{$blog->user->name}} </span>
                            </h2>

                            <div class="thumbnail-img">
                                <img src="{{url('/uploads/Blogs/'.$blog->Blogimage)}}" style="height:250px;width:380px;"
                                    alt="blog-img">
                                <div class="thumbnail-img-overlay"></div>
                                <!--/.thumbnail-img-overlay-->

                            </div>
                            <!--/.thumbnail-img-->

                            <div class="caption">
                                <div class="blog-txt" style="overflow: hidden;text-overflow: ellipsis;">
                                    <h3>
                                        <a style="font-size:20px" href="{{route('website.blog',$blog->id)}}">
                                            {{$blog->BlogName}}
                                        </a>
                                    </h3>


                                    <p style="height: 50px;">
                                        {{$blog->Description}}
                                    </p>


                                </div>

                                <a style="margin-left: 1.2rem;font-size:13px;color: #00d8ff;"
                                    href="{{route('website.blog',$blog->id)}}">Read More</a><span
                                    style="font-size:10px;font-style:italic;">{{$blog->Date}}</span>

                                <!--/.blog-txt-->
                            </div>
                            <!--/.caption-->
                        </div>
                        <!--/.thumbnail-->

                    </div>
                    <!--/.col-->

                    @endforeach
                </div>
                <!--/.row-->
            </div>
            <!--/.blog-content-->
        </div>
        <!--/.blog-details-->
    </div>
    <!--/.container-->
    </div>
</section>
<!--/.blog-->
<!--blog end-->


<!--subscribe start-->
<section id="subs" class="subscribe">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2>
                Register and Be a member to make your tourplan.
            </h2>
            <p>
                To add review select review button.
            </p>
        </div>
        <form>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="margin-left: 38%;">
                    <div class="custom-input-group">
                        <a style="padding-top: 11px;font-weight: 500;width: 153px;height: 50px;border-radius: 56px;font-size: 20px;"
                            class="book-btn" href="{{route('user.review')}}">Review</a>



                    </div>

                </div>
            </div>
        </form>
    </div>

</section>
@endsection
