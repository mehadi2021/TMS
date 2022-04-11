<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Add Blog</title>


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
	<div id="booking" class="section" style="    height: 100rem;background-image: url('{{url('image/blog-tour.jpg')}}');">
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
							<h1>Add Blog</h1>
							<p>
                                Add blog about Locations, Spots, or journey Experience in a location or spot.
    </p><p>Make your tour and Share your Journey Experience with others.
							</p>
						</div>
					</div>
					@if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
					<div class="col-md-4 col-md-pull-7"style="width: 486px;right:150px;">
						<div class="booking-form"style="background-color: #0000006e;">
							<form action="{{route('My.Update.blog',$blog->id)}}" method="POST"enctype="multipart/form-data">
								@csrf
								@method('PUT')
								
									
                            <div class="form-group">
                            <div class="col-12">
									<label class="form-label">Blog Name</label>
									<input class="form-control" value="{{$blog->BlogName}}"name="BlogName" type="text" placeholder="blog name" required>
								</div>
								</div>
								
									
								<div class="row">
                                <div class="col-sm-7">
                                    <label class="form-label">Blogger name</label>
									<select name="blogger_name" class="form-control" id="exampleFormControlSelect1"required>

@foreach ($user as $user)
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
											<select class="form-control"name="Location"required>
											 @foreach ($location as $location)
											 <option class="form-control"
       @if($location->id==$blog->location_id)
       selected
       @endif
   value="{{$location->id}}">{{$location->Location_name}}</option>
												@endforeach
												</select>
										</div>
									</div>
		
								</div>
								<div class="row">
								<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Blog image</span>
											<input class="form-control" name="BlogImage"type="file" >
                                           
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
                                        <span class="form-label">Blog image (2)</span>
                                    <input class="form-control" name="SecondBlogImage"type="file" >
                                         
											</div>
                                            </div>
								
								

								
									
									
                                          
                                    </div>
                                    <div class="row">
									<div class="col-sm-5">
										<div class="form-group">
                                        <span class="form-label">Blog image (3)</span>
                                            <input class="form-control" name="ThirdBlogImage"type="file" >
											</div>
                                            </div>
                                           

											<div class="col-sm-7">
										<div class="form-group">
											<span class="form-label">Date</span>
											<input class="form-control"value="{{date('Y-m-d\TH:i', strtotime($blog->Date)) }}"name="Date" type="dateTime-local" required>
										</div>
									</div>
                                            </div>
                                            <div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">About</span>
                                            <input  class="form-control"value="{{$blog->Description}}" name="Description"type="text" width="400px" required></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Description</span>
                                            <input  class="form-control" value="{{$blog->Description2}}"name="Description2"type="text" width="400px" required></input>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<span class="form-label">Other details</span>
                                            <input  class="form-control"value="{{$blog->Description3}}" name="Description3"type="text" width="400px" required></input>
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