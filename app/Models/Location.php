<?php

namespace App\Models;
use App\Models\spot;
use App\Models\blogs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    use HasFactory;
    protected $guarded=[];

public function spots(){
   return $this->hasMany(Spot::class);
}
public function blogs(){
    return $this->hasMany(Blog::class);
 }
 
}
