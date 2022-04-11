<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Query</title>



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
	<div id="booking" class="section"style="background-image: url('{{url('image/query.jpg')}}');">
		<div class="section-center">
			<div class="container">
				<div class="row">
					
						<div class="col-md-7 col-md-push-5"style="left: 42.666667%;bottom: 15rem;">
						<div class="booking-cta">
						<h1 style="font-size: 30px;">Ask Us</h1>
						
						</div>
					</div>
					@if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
					<div class="col-md-4 col-md-pull-7"style="width:450px;right: 28.333333%;">
						<div class="booking-form"style=" background-color: #00376380;">
							<form action="{{route('user.query.store')}}" method="POST">
								@csrf
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Tourplan Name</span>
											
											
											<label>{{$tourplan->Tourname}}</label>
											<input type="hidden"  class="form-control" name="plan_id" value="{{$tourplan->id}}">
									
											
						
										</div>
									
									</div>
                                    </div>
							
								
                
                                    <div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Subject</span>
											
											<select class="form-control"name="subject" required>
												
												<option class="form-control"value="Tour Plan">Tour Plan</option>
													<option class="form-control"value="Join">Join</option>
														<option class="form-control"value="Other">Other</option>
	</select>
										</div>
									
									</div>
                                    </div>
								
                                   
								<div class="row">
                                <div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Ask us</span>
                                            <textarea style="width: 379px;height: 142px;"class="form-control" name="question"type="text"></textarea>
											
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
</body>

</html>

