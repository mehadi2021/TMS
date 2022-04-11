@if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="{{route('website')}}">
									tour<span>Plan</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">home</a></li>
										<li class="smooth-menu"><a href="#gallery">Destination</a></li>
										<li class="smooth-menu"><a href="#pack">Spots </a></li>
										<li class="smooth-menu"><a href="#spo">Tour Plans</a></li>
										<li class="smooth-menu"><a href="#blog">blog</a></li>
										<li class="smooth-menu"><a href="#subs">Contact Us</a></li>
										<li>
										@if(auth()->user())
                    <!-- Button trigger modal -->
					
<!-- <h5> <img src="" class="rounded"alt=""style="border-radius: 50%;width:50px"class="m-4 pb-5">{{auth()->user()->name}}<a href="{{route('user.logout')}}" class="book-btn">Logout</a></h5> -->
<!-- <a href="{{route('user.logout')}}" class="book-btn">{{auth()->user()->name}} | Logout</a> -->
<div class="dropdown">
  <button class=" book-btn " style="border: 1px solid #57e2ff;
"type="button" data-toggle="dropdown">{{auth()->user()->name}}({{auth()->user()->role}})
  <span class="caret"></span></button>
   <ul class="dropdown-menu"style="background-color: transparent;box-shadow: 0 6px 20px rgba(0,0,0,.53);border-radius:2ch;">
   <li><a style="color: deepskyblue;text-align: center;" href="{{route('profile',auth()->user()->id)}}">Profile</a></li>

  <li><a style="color: deepskyblue;text-align: center;" href="{{route('tourplan.list')}}">Join Requests</a></li>
  <li><a style="color: deepskyblue;text-align: center;" href="{{route('My.Joined.Plan.List')}}">I joined</a></li>
  <li><a style="color: deepskyblue;text-align: center;" href="{{route('Myplan.list')}}">My plan</a></li>
  <li><a style="color: deepskyblue;text-align: center;" href="{{route('My.blog.List')}}">My Blogs</a></li>


  
    <li><a style="color: deepskyblue;text-align: center;" href="{{route('user.logout')}}">Log Out</a></li>
  </ul>
</div>

 
                        @else
                        <a href="{{route('user.page.login')}}" class="book-btn">Login</a>
                        
											
											
										</li><!--/.project-btn--> 
										@endif
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header>