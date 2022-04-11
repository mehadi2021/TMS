<div class="blog-content">
							<div class="row">
                            @foreach($traveler->user as $key=>$traveler)
								<div class="col-md-4 col-sm-6">
									<div class="thumbnail"style="width:374px;">
										<h2>{{$traveler->user->name}}<span style="float:right; padding-right:15px;font-size:12px">{{$blog->user->name}} </span></h2>
										
										

								</div><!--/.col-->

@endforeach
							</div><!--/.row-->
						</div><!--/.blog-content-->