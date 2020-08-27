<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellerWallet extends Model
{
    protected $guarded = [];
    //

    public function seller(){
       return $this->belongsTo('App\Seller','seller_id','id');
    }

    public function buyer(){
        return $this->belongsTo('App\Buyer','buyer_id','id');
    }

    
}
