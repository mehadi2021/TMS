<?php

namespace App\Models;
use App\Models\User;
use App\Models\Spot;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function spot(){
        return $this->belongsTo(Spot::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
}
