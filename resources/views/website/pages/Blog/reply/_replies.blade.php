
<div class="blog1-post-info-box less-width pull-right" style="margin: 5px 0">
    <div class="text-box border padding-1" style="margin-right: 126rem;">
        <div class="text-box-right" style="padding: 0 0 0 50px">
            <h5 class="uppercase dosis less-mar2">{{$reply->name}}</h5>
            <div class="blog1-post-info"><span>{{$reply->created_at->diffForHumans()}}</span></div>
            <p class="paddtop1">{{$reply->comment}}</p>
            <a href="{{route('comment.delete',$reply->id)}}"><i class="glyphicon glyphicon-trash"></i> </a> 
            @if(auth()->user()->email != $reply->email)
        <a
                                    class="btn btn-border yellow-green btn-small-2 "
                                    style="margin-left: 8rem;"
                                    href="#comment-form"
                                    onclick="document.getElementById('comment_id').value = {{$comment->id}}">
                                    Reply
                                </a>
                                @endif
        </div>
   
    </div>
</div>

<!--end item-->
<div class="clearfix"></div>