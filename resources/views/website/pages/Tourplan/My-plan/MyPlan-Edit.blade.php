<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Edit Plan</title>



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
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your Tour Plan</h1>
							<p>
                                Plan your tour by creating the tour plan.After creating the tour plan,anyone can send you request for joining.
    </p><p>Happy tour.
							</p>
						</div>
					</div>
					@if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
					<div class="col-md-4 col-md-pull-7"style="width:450px;">
						<div class="booking-form"style="background-color:#0bc4e94d">
							<form action="{{route('Myplan.update',$planEdit->id)}}" method="POST">
                           
    @csrf
    @method('PUT')
								<div class="row">
									<div class="col-sm-7">
                            <div class="form-group">
									<span class="form-label">Tour Name</span>
									<input class="form-control" name="TourName" value="{{$planEdit->Tourname}}"type="text" placeholder="Enter a destination or hotel name">
								</div>
								</div>
								<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">From</span>
											<input class="form-control" value="{{$planEdit->from}}"name="From"type="text" placeholder="from which place"required>
										</div>
									</div>
									</div>
								<div class="row">
									<div class="col-sm-7">
										<div class="form-group">
											<span class="form-label">Destination</span>
										
											
											
                                            <select name="TourDestination" class="form-control" id="exampleFormControlSelect1"placeholder="from which place">

@foreach ($location as $location)
   <option class="form-control"
       @if($location->id==$planEdit->location_id)
       selected
       @endif
   value="{{$location->id}}">{{$location->Location_name}}</option>
@endforeach

</select>
		
									
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
											<span class="form-label">Spot</span>
											
                                            <select name="spotname" class="form-control" id="exampleFormControlSelect1">

@foreach ($spot as $spot)
   <option class="form-control"
       @if($spot->id==$planEdit->spot_id)
       selected
       @endif
   value="{{$spot->id}}">{{$spot->SpotName}}</option>
@endforeach

</select>

												
											
												
										</div>
									</div>
		
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date</span>
											<input class="form-control"value="{{$planEdit->TourDate}}"name="TourDate" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Duration</span>
											<input class="form-control" value="{{$planEdit->TourDuration}}"name="TourDuration"type="text" required>
										</div>
									</div>
								</div>

								<div class="row">
                                <div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Transport</span>
                                            <select name="TourDuration" class="form-control" id="exampleFormControlSelect1">

        @foreach ($transports as $transport)
           <option class="form-control"
               @if($transport->id==$planEdit->transport_id)
               selected
               @endif
           value="{{$transport->id}}">{{$transport->transportType}}</option>
        @endforeach

    </select>
									
											</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Member amount</span>
                                            <input class="form-control"value="{{$planEdit->members}}"name="members" type="text" required>
					
										</div>
									</div>
									
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Budget</span>
                                            <input class="form-control"name="TourBudget" value="{{$planEdit->TourBudget}}" type="text" >
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