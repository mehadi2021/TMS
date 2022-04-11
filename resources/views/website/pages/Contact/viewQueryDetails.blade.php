@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<style>
  body {
    background: #eee
}

.date {
    font-size: 11px
}

.comment-text {
  font-size: 15px
}

.fs-12 {
    font-size: 12px
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}
  </style>
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
             
                    <div class="d-flex flex-row user-info"><img  src="{{'/uploads/Spots/'.$query->tourplan->spot->SpotImage}}" style="width:400px;">
                        <div class="d-flex flex-column justify-content-start ml-2"style=" margin-top:1rem;   font-size: 19px;"><span class="d-block font-weight-bold name">{{$query->user->email}}</span><span class="date text-black-50"style="background-color: white;">    {{ $current_date_time }}</span></div>
                    </div>
                    <div class="mt-2">
                        <p style="color:#007bff;margin-top:1rem;"class="comment-text">Tour Plan Name : <span style="color: black;">{{$query->tourplan->Tourname}}</span></p>
                    </div>
                    <div class="mt-2">
                    <p style="color:#007bff;margin-top:1rem;"class="comment-text">planner name : <span style="color: black;">{{$query->tourplan->user->name}}</span></p>
                    </div>
                    <div class="mt-2">
                    <p style="color:#007bff;margin-top:1rem;"class="comment-text">Subject : <span style="color: black;">{{$query->subject}}</span></p>
                    </div>
                    <div class="mt-2">
                    <p style="color:#007bff;margin-top:1rem;"class="comment-text">Question : <span style="color: black;">{{$query->query}}</span></p>
                    </div>
                    <div class="mt-2">
                    <p style="color:#007bff;margin-top:1rem;"class="comment-text">Reply : <span style="color: black;">{{$query->reply}}</span> <span style="font-size:11px;">by : {{$query->tourplan->user->email}}</span></p>
                    </div>
                </div>
                
            </div>
          
        </div>
    </div>
</div>
@endsection