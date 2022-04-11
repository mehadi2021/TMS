<?php

namespace App\Models;
use App\Models\User;
use App\Models\Orders;
use App\Models\AddTourPlan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Join extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function tourplan(){
        return $this->belongsTo(AddTourplan::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order(){
        return $this->hasOne(Orders::class);
    }

   
}
