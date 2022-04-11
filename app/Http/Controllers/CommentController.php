<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentStoreRequest;

class CommentController extends Controller
{
    
    public function store(CommentStoreRequest $request, Blog $post)
    {
     
        $post->comments()->create([
            'parent_id' => $request->comment_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        return back();
    }


    public function comment_delete($comment_id){
        $comment=Comment::find($comment_id)->delete();
        return redirect()->back()->with('success','comment deleted Successfully.');
    }
}
