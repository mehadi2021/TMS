<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend/log in/login.css')}}">
</head>
<body>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
<div class="container">
  
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
				
				</div>
			</div>
			<div class="card-body">
			
        <form action="{{route('user.dologin')}}" method="post">
            @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="email" type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password"type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
					
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a data-toggle="modal"href="#registration">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="{{route('forgot.password.form')}}">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('{{url('/frontend/log in/image/regi-banner.jpg')}}');height:900px;width:600px">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
        <form action="{{route('user.registration')}}" method="post" enctype="multipart/form-data">
            @csrf
          <!--Body-->
          <!-- <div class="md-form mb-5">
            <input type="email" id="Form-email5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>

          <div class="md-form pb-3">
            <input type="password" id="Form-pass5" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label> -->
          
            <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="user_name"type="text" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 ">
                    <div class="form-outline">
                      <input name="user_mobile" type="mobile" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Mobile No.</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="user_email" type="email" id="form3Example1m1" class="form-control form-control-lg" />
                      <label class="form-label" for="email">Email</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input name="user_password" type="password" id="form3Example1n1" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Password</label>
                    </div>
                  </div>
                </div>
<div class="row">

                <div class="col-md-8 mb-4">
                  <input name="Address" type="text" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
                
                <div class="col-6 col-md-4" >
              
               
<input class="form-control" list="Gender" name="gender">
<datalist id="Gender">
  <option value="Male">
  <option value="Female">
  <option value="Other">
  
</datalist>
<label for="Gender" class="form-label">Gender</label>
  </div>
  </div>
            
          
                  <div class="row">
                
                    <div class="col-6">
                      <input name="DOB" type="date" id="form3Example1m" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">Date of Birth</label>
                    </div>
                  
                  <div class="col-md-6 mb-4">
                   
                      <input name="nid" id="form3Example1n" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">NID/Birth cirtificate</label>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12 mb-4">
               
               <input type="file" name="image" id="form3Example1n" class="form-control form-control-lg" />
               <label class="form-label" for="form3Example1n">image</label>
             </div>
                <div class="col-12">
                  <textarea name="bio" type="text" id="form3Example1m" class="form-control form-control-lg"></textarea>
                  <label class="form-label" for="form3Example1m">Bio</label>
                </div>
              
             
              </div>
               
                            

 
            <div class="form-group">
              <input class="form-check-input" type="checkbox" id="checkbox624">
              <label for="checkbox624" class="white-text form-check-label">Accept the<a href="#" class="green-text font-weight-bold">
                  Terms and Conditions</a></label>
            </div>
            <div class="row d-flex align-items-center mb-4">

<!--Grid column-->
<div class="text-center mb-3 col-md-12">
  <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Sign up</button>
</div>
<!--Grid column-->
<div class="col-md-12">
              <p class="font-small white-text d-flex justify-content-end">Signed up or Have an account? <a href="{{route('user.page.login')}}" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
</div>

            </div>
          <!--Grid row-->
          
          <!--Grid row-->

          <!--Grid row-->
        

            <!--Grid column-->
            
            <!--Grid column-->

         
          <!--Grid row-->
          </div>
        </div>
      </div>
    </div>
</form>
    <!--/.Content-->
  </div>
  </div>

<!-- Modal -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

</body>
</html>