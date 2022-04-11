@extends('website.master')
@section('item')
<div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" >
                         <!-- <h3>Limitations Of Liability</h3> -->
                        <section id="home" class="" style="display:flex; align-items:center; background-size:contain; background-position:center;min-height: 500px; background-image: url('{{url('/uploads/Locations/'.$locations->Location_image)}}')">

<h4 style=" text-shadow: 2px 5.5px black;   background-color: #595757e6; border: solid;   border-color: whitesmoke;text-align:center; margin: auto;color: white; font-size: 50px;">
						{{$locations->Location_name}}
					</h4>
</div>
</div>
</div>

					<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
				
                    <div class="text-container" style="margin-top: 30px;">
                   
                        <h3 style="padding-bottom: 15px;">Description</h3>
                        <p>{{$locations->LocationDetails}}</p>
					<div>
					<div>
					<div class="text-container" style="margin-top: 30px;">
                   
				   <h3 style="padding-bottom: 15px;">Related Spots</h3>
				  
			   <div>
					
				<div class="packages-content">
					<div class="row">
                        @foreach($spot as $spot)
                    <div class="col-md-4 col-sm-6">
							<div class="single-package-item" style="height: 500px;">
								<img style="height:200px;"src="{{url('uploads/Spots/'.$spot->SpotImage)}}" alt="package-place">
								<div class="single-package-item-txt">
									<h3>{{$spot->SpotName}} <span class="pull-right">{{$spot->location->Location_name}}</span></h3>
									<div class="packages-para"style="overflow: hidden;text-overflow: ellipsis;">
										<p style="height: 100px;"><i class="fa fa-angle-right"></i>{{$spot->SpotDetails}}	</p>
                                    
									</div><!--/.packages-para-->
									
									<div class="about-btn">
<button class="about-view packages-btn"type="submit" >
											<a href="{{route('user.tourplan')}}">Plan tour</a>
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
@endforeach


                        </div><!--/.row-->
				</div><!--/.packages-content-->

				<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
				<div class="text-container" style="margin-top: 30px;">
                   
				   <h3 style="padding-bottom: 15px;">Related Blogs</h3>
				  
			   <div><!--/.gallery-header-->
						
						<div class="blog-content">
							<div class="row">
								@foreach($blog as $key=>$blog)
								<div class="col-md-4 col-sm-6">
									<div class="thumbnail"style="width:374px;">
										<h2>{{$blog->location->Location_name}}<span style="float:right; padding-right:15px;font-size:12px">{{$blog->user->name}} </span></h2>
										
										<div class="thumbnail-img">
											<img src="{{url('/uploads/Blogs/'.$blog->Blogimage)}}"style="height:250px;width:380px;" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
									  
										<div class="caption">
											<div class="blog-txt">
											<h3>
													<a style="font-size:20px" href="{{route('website.blog',$blog->id)}}">
														{{$blog->BlogName}}
													</a>
												</h3>
										
												
												<p>
												{{$blog->Description}}
												</p>
												<a href="{{route('website.blog',$blog->id)}}">Read More</a><span style="position:relative;font-size:10px;font-style:italic;">{{$blog->Date}}</span>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

@endforeach
							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->
</div>
		</section><!--/.blog-->
		<!--blog end-->

				<div>
				<div>
				<div>
				<div>	
                @endsection