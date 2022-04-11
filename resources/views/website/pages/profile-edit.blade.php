<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Additional</a>
              <a href="" class="list-group-item list-group-item-action">Password change</a>
              
     
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Edit Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="{{route('profile.update',$user->id)}}"method="POST"enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name*</label> 
                                <div class="col-8">
                                  <input id="username" value="{{$user->name}}"name="user_name" placeholder="Username" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="name" value="{{$user->email}}"name="user_email" placeholder="Email" class="form-control here" type="email">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <input id="lastname" value="{{$user->Address}}"name="Address" placeholder="Address" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">NID</label> 
                                <div class="col-8">
                                  <input id="text"value="{{$user->NID}}" name="nid" placeholder="NID" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Phone No.</label> 
                                <div class="col-8">
                                  <input id="email"value="{{$user->mobile}}" name="user_mobile" placeholder="Phone No" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Gender</label> 
                                <div class="col-8">
                                  <select id="website"name="gender" placeholder="gender" class="form-control here" type="text">
                               
 
                                  <option selected>{{$user->Gender}}</option>
                                <option value="male" {{($user->Gender === 'male') ? 'Selected' : ''}}>male</option>
                                <option value="female" {{($user->Gender === 'Female') ? 'Selected' : ''}}>female</option>
                                <option value="Other" {{($user->Gender === 'Other') ? 'Selected' : ''}}>Other</option>
                                </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">BIO</label> 
                                <div class="col-8">
                                  <input style="height: 9rem;"id="publicinfo"value="{{$user->bio}}" name="bio" cols="40" rows="4" class="form-control">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Date of Birth</label> 
                                <div class="col-8">
                                  <input id="newpass"value="{{date('Y-m-d\TH:i', strtotime($user->DOB)) }}" name="DOB" placeholder="DOB" class="form-control here" type="dateTime-local">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">Image</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New image" class="form-control here" type="file">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>