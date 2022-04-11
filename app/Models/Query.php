<?php

namespace App\Models;
use App\Models\User;
use App\Models\AddTourPlan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table="plan_query";



    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function tourplan(){
        return $this->belongsTo(AddTourPlan::class,'tourplan_id','id');
    }
}
