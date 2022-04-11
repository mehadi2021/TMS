<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Add Spot</title>


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
	<div id="booking" class="section" style="    height: 80rem;background-image: url('{{url('image/spot.jpg')}}');">
		<div class="section-center">
		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

			<div class="container">
				<div class="row">
					<div class="col-md-7 "style="right:150px;">
						<div class="booking-cta">
							<h1>Add Spot</h1>
							<p>
                                Add spot of any Locations.
    </p><p>Make your tour and have a happy tour with others.
							</p>
						</div>
					</div>
					@if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
					<div class="col-md-4 col-md-pull-7"style="width: 486px;right:150px;">
						<div class="booking-form"style="background-color: #0000006e;">
							<form action="{{route('store.spot')}}" method="POST"enctype="multipart/form-data">
								@csrf
								
									
                            <div class="form-group">
                            <div class="col-12">
									<label class="form-label">Spot Name</label>
									<input class="form-control" name="SpotName" type="text" placeholder="Enter a destination or hotel name">
								</div>
								</div>
								
									
								<div class="row">
                                <div class="col-sm-7">
                                    <label class="form-label">Traveler name</label>
									<select name="traveler_name" class="form-control" id="exampleFormControlSelect1">

@foreach ($users as $user)
   <option
	   @if($user->id==auth()->user()->id)
	   selected
	   @endif
   value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
											<span class="select-arrow"></span> 
    </div>
    
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Location</span>
										  <select name="SpotLocation" class="form-control"  placeholder="spot location"  required>
        @foreach($locations as $location)
      <option value="{{$location->id}}">{{$location->Location_name}}</option> 
      @endforeach  
    </select>
										</div>
									</div>
		
								</div>
								<div class="row">
								<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Spot image</span>
											<input class="form-control" name="SpotImage"type="file" required>
                                           
										</div>
									</div>
		
											
                                            </div>
                                            <div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Spot details</span>
                                            <input  class="form-control" name="Spotdetail"type="text" width="400px" required></input>
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