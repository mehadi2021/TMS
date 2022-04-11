<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Join;
use App\Models\Spot;
use App\Models\Query;

use App\Models\Transport;
use App\Models\Location;
class AddTourPlan extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user(){

        //who->relation name->to whom
            // 1 to  1 dependent =belongsTo
            // 1 to 1 not dependent = hasOne
            return $this->belongsTo(User::class,'user_id','id');
        }
        public function transports(){
            return $this->belongsTo(Transport::class,'transport_id','id');
        }
        public function spot(){
            return $this->belongsTo(Spot::class);
        }
        public function location(){
            return $this->belongsTo(Location::class);
        }
        public function travelers(){
            return $this->hasMany(Join::class,'tourplan_id','id');
        }
        public function question(){
            return $this->hasMany(Query::class,'tourplan_id','id');
        }
        public function order(){
            return $this->hasMany(Orders::class,'tourplan_id','id');
        }
}
