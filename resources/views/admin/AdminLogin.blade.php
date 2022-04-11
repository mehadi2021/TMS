<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('backend/Login/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url('{{url('backend/Login/images/bg.jpg')}}');">
	<section class="ftco-section">
		<div class="container">
		@if(session()->has('error'))
                    <p class="alert alert-danger">
                        {{session()->get('error')}}
                    </p>
                @endif
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">WELCOME</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 style="text" class="mb-4 text-center">Admin</h3>
		      	<form action="{{route('admin.doLogin')}}" class="signin-form"method="post">
                      @csrf
		      		<div class="form-group">
		      			<input name="email"type="text" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input name="password" type="password" class="form-control" placeholder="Password" required>
	             
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	
								</div>
								<div class="w-50 text-md-right">
									<a href="{{route('forgot.password.form')}}" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	         
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{url('backend/Login/js/jquery.min.js')}}"></script>
  <script src="{{url('backend/Login/js/popper.js')}}"></script>
  <script src="{{url('backend/Login/js/bootstrap.min.js')}}"></script>
  <script src="{{url('backend/Login/js/main.js')}}"></script>

	</body>
</html>

