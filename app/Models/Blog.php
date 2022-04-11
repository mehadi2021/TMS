<?php

namespace App\Models;
use App\Models\User;
use App\Models\Comment;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table="_blogs";

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')
            ->latest()
            ->whereNull('parent_id');
    }
    
}
