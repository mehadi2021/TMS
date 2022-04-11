<?php

namespace App\Models;

use App\Models\User;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spot extends Model
{
    use HasFactory;
    protected $table="_spots";
    protected $guarded=[];

    public function location(){
        return $this->belongsTo(location::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
