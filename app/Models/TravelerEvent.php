<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelerEvent extends Model
{
    use HasFactory;
    protected $table='travelers_events';
    protected $guarded=[];

    public function travelar(){
      return $this->belongsTo(Travelar::class);
    }
}
