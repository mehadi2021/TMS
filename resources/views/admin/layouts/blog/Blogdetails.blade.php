@extends('admin.welcome')
@section('contents')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Blog Details</h3>

    <p>
        <img style="border-radius: 4px;" width="500px;" src=" {{url('/uploads/Blogs/'.$blog->Blogimage)}}" alt="Blog">
    </p>
<p style="font-weight:bold;">Blog Name: {{$blog->BlogName}}</p>
<p>Location: {{$blog->location->Location_name}}</p>
<p>Blogger Name: {{$blog->user->name}}</p>
<div class="images-container">



        <img style="border-radius: 4px;" width="300px;" src=" {{url('/uploads/Blogs/secondimage/'.$blog->SecondBlogimage)}}" alt="Blog">
    




        <img style="border-radius: 4px;" width="300px;" src=" {{url('/uploads/Blogs/thirdimage/'.$blog->ThirdBlogimage)}}" alt="Blog">
        </div>

<p>About: {{$blog->Description}}</p>
<p>Description: {{$blog->Description2}}</p>
<p>Other details: {{$blog->Description3}}</p>
<p>Date: {{$blog->Date}}</p>

</div>
</div>
</div>
</div>

@endsection