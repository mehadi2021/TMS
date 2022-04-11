@extends('website.master')
@section('item')


<!-- <br><br><br><br><br> -->
<div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container" >
                         <!-- <h3>Limitations Of Liability</h3> -->
                        <section id="home" class="" style="display:flex; align-items:center; background-size:contain; background-position:center;min-height: 500px; background-image: url('{{url('/uploads/Blogs/'.$blogs->Blogimage)}}')">
			
			

           
    <div class="col-md-4"style="width: fit-content;    top: 100px;left: 620px;border: solid;">
    
            <div class="packages-para"style="background-color: #00000087;">
            
										<h4 style="color: #ffffff;font-weight: 500;text-align:center;font-size: xxx-large;text-shadow: 0 6px black;">{{$blogs->location->Location_name}}	</h4>
										<h3 style="color: #ffffff;font-weight: 500;text-align:center;text-shadow: 2px 3px black;">[ {{$blogs->BlogName}} ]</h3>
										<p></p>
                                    
									</div>
                                    </div>
                                      
		

		        </section>
                    </div> <!-- end of text-container -->
                   <div style="padding-left: 25px; padding-right: 25px; margin-bottom: 70px;">
                    <div class="text-container" style="margin-top: 30px;">
                    <p >{{$blogs->Date}}---{{$blogs->user->name}}</p>
                        <h3 style="padding-bottom: 15px;">About</h3>
                        <p>{{$blogs->Description}}</p>
                        <br></br>
                        <h3 style="padding-bottom: 15px;">Description</h3>
                        <p>{{$blogs->Description2}}</p>
                        <br></br>
                        <h3 style="padding-bottom: 15px;">Other details</h3>
                        <p>{{$blogs->Description3}}</p>
                    </div> <!-- end of text-container -->

                    <!--div class="text-container" style="margin-top: 30px;">
                        <h3>License Types & Template Usage</h3>
                        <p>All our templates inherit the GNU general public license from HTML. All .PSD & CSS files are packaged separately and are not licensed under the GPL 2.0. Instead, these files inherit Aria Personal Use License. These files are given to all Clients on a personal use basis. You may not offer them, <a class="green" href="#your-link">modified or unmodified</a>, for redistribution or resale of any kind. You can’t use one of our themes on a HTML domain. More on HTML Vs CSS, you can read here. You can use our templates do develop sites for your clients.</p>
                        <p>Services help our customers promote their products and services, marketing and advertising; engaging audiences; scheduling and publishing messages; and analyze the results.</p>
                    </div--> <!-- end of text-container -->

                    <!--div class="text-container" style="margin-top: 30px;">
                        <h3>Designer Membership And How It Applies</h3>
                        <p>By using any of the Services, or submitting or collecting any Personal Information via the Services, you consent to the collection, transfer, storage disclosure, and use of your Personal Information in the manner set out in this Privacy Policy. If you do not consent to the use of your Personal Information in these ways, please stop using the Services.</p>
                    </div--> <!-- end of text-container -->
                    
                    <!--div class="text-container last" style="margin-top: 30px;">
                        <h3>Assets Used In The Live Preview Content</h3>
                        <p>Aria Landing Page uses tracking technology on the landing page, in the Applications, and in the Platforms, including mobile application identifiers and a unique Hootsuite user ID to help us recognize you across different Services, to monitor usage and web traffic routing for the Services, and to customize and improve the Services. By visiting Aria or using the Services you agree to the use of cookies in your browser and HTML-based emails. Cookies are small text files placed on your device when you visit a <a class="green" href="#your-link">web site</a> in order to track use of the site and to improve your user experience.</p>
                        
                    </div--> <!-- end of text-container -->
                    </div>
                  

                </div>
                
            </div> <!-- end of row -->
            


            <!-- comment part -->

           

        </div>
<!-- <h1>hello</h1> -->
<div class="clearfix"></div>

                <br/>
                <br/>
                <h4 class=" dosis uppercase"style="border: outset;border-width: 3px;text-align:center; margin-bottom: 1rem;">Comment Section</h4>

                <h4 class="dosis uppercase less-mar3"style="margin-left: 5rem;"><a href="#">{{$blogs->comments->count()}}Comments</a></h4>
                <br/>

                @forelse($blogs->comments as $comment)
                    <div class="blog1-post-info-box">
                        <div class="text-box border padding-3">
                            <div class="text-box-right more-padding-2"style="margin-left: 5rem;background-color: aliceblue;">
                                <h5 class="uppercase dosis less-mar2">{{$comment->name}}</h5>
                                <div class="blog1-post-info">
                                    <span>
                                        {{$comment->created_at->diffForHumans()}}
                                    </span>
                                </div>
                                <p class="paddtop1">{{$comment->comment}}</p>
                                <br/>
                                @if(auth()->user()->email != $comment->email )
                                <a
                                    class="btn btn-border yellow-green btn-small-2 "
                                    href="#comment-form"
                                    onclick="document.getElementById('comment_id').value = {{$comment->id}}">
                                    Reply
                                </a>
                                @endif
                                <a href="{{route('comment.delete',$comment->id)}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            </div>
                            @forelse($comment->replies as $reply)
                                @include('website.pages.Blog.reply._replies', ['reply'=> $reply])
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <!--end item-->

                    <div class="clearfix"></div>
                    <br/>
                @empty
                @endforelse

            <!-- post form -->
                <div class="smart-forms bmargin" id="comment-form" style="margin-left: 4rem;">
                    <h4 class=" dosis uppercase"style="    margin-bottom: 1rem;">Post a Comment</h4>

                    <form
                        method="post"
                        action="{{route('comment.store',[$blogs->id])}}"
                        id="smart-form">
                        @csrf
                        <input type="hidden" name="comment_id" id="comment_id">
                        <div>
                            <div class="section form-group">
                                <label class="field prepend-icon">
                                    <input
                                        type="text"
                                        name="name"
                                        value="{{auth()->user()?auth()->user()->name:old('name')}}"
                                        id="sendername"
                                        class="gui-input form-control"
                                        placeholder="Enter name">
                                </label>
                            </div>
                            <!-- end section -->

                            <div class="section form-group">
                                <label class="field prepend-icon">
                                    <input
                                        type="email"
                                        name="email"
                                        value="{{auth()->user()?auth()->user()->email:old('email')}}"
                                        id="emailaddress"
                                        class="gui-input form-control"
                                        placeholder="Email address">
                                </label>
                            </div>
                            <!-- end section -->

                            <div class="section form-group">
                                <label class="field prepend-icon">
                                    <textarea
                                        class="gui-textarea form-control"
                                        id="sendermessage"
                                        name="comment"
                                        placeholder="Enter message"></textarea>
                                    <span
                                        class="input-hint"style="font-size:10px;">
                                        <strong >Hint:</strong>
                                        Please enter between 80 - 300 characters.
                                    </span>
                                </label>
                            </div>
                            <!-- end section -->

                            <div class="result"></div>
                            <!-- end .result  section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="form-footer">
                            <button type="submit" data-btntext-sending="Sending..."
                                    class="button btn-primary yellow-green">Submit
                            </button>
                            <button type="reset" class="button"> Cancel</button>
                        </div>
</div>
<a style="text-align:right; text-align:right;margin-left:4rem;margin-top:2rem;" class="btn-outline-reg" href="{{url('/')}}">BACK</a>
@endsection