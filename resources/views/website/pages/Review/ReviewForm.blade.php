<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Review Form</title>



	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{url('frontend/Tourplan/css/bootstrap.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{url('frontend/Tourplan/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section"style="background-image: url('{{url('image/review.jpg')}}');">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5"style="left: 39.666667%;bottom: 15rem;">
						<div class="booking-cta">
						<h1 style="font-size: 30px;">Add Review</h1>
						</div>
					</div>
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
					<div class="col-md-4 col-md-pull-7"style="width: 460px;right: 31.333333%;">
						<div class="booking-form"style="background-color: #20043766;    width: 500px;">
							<form action="{{route('user.store.review')}}" method="POST">
								@csrf
								<div class="row">
									<div class="col-sm-12">
                            <div class="form-group">
									<span class="form-label">Traveler Name</span>
                                  
                                       
									<select name="traveler_name" class="form-control" id="exampleFormControlSelect1">

@foreach ($user as $user)
   <option
	   @if($user->id==auth()->user()->id)
	   selected
	   @endif
   value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
                                                
																			
                                            </div>
								</div>
								
									</div>
								<div class="row">
									<div class="col-sm-7">
										<div class="form-group">
											<span class="form-label">Location name</span>
											<select class="form-control"name="location">
											 @foreach ($location as $location)
											 
												<option value="{{$location->id}}">{{$location->Location_name}}</option>
												@endforeach
												</select>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Spot</span>
											<select class="form-control"name="spotname">
											 @foreach ($spot as $spot)
											
												<option value="{{$spot->id}}">{{$spot->SpotName}}</option>
											
                                                @endforeach
												</select>
										</div>
									</div>
		
								</div>
								
								<div class="row">
                                <div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">review</span>
                                            <textarea style="width: 460px;height: 156px;"class="form-control" name="review"type="text"></textarea>
											
										</div>
									</div>
									
									
							
									
								
								</div>
								<div class="form-btn">
									<button class="submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>