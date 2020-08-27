<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewReply extends Model
{
    //
    protected $guarded = [];

    public function review(){
        return $this->belongsTo('\App\Review','review_id','id');
    }


    public function getReplyByAttribute($val){
        $user = null;
        if($this->reply_type == 'fast_food_grocery'){
            $user = FastFoodGrocery::find($val);
        }
        else if($this->reply_type == 'professional'){
            $user  = Professional::find($val);
        }
        else if($this->reply_type == 'seller'){
            $user = Seller::find($val);
        }
        else if($this->reply_type == 'buyer'){
            $user = Buyer::find($val);
        }
        else if($this->reply_type == 'admin'){
            $user = Admin::find($val);
        }
        else if($this->reply_type == 'shopper'){
            $user = Shopper::find($val);
        }
        
        return $user;
    }

}
