<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    protected $guarded = [];

    public function order_details(){
        return $this->belongsTo('\App\OrderDetails','order_details_id','id');
    }

    public function getBuyerIdAttribute($id){
        return Buyer::find($id);
    }
    public function getSellerIdAttribute($seller_id){
        return Seller::find($seller_id);
    }
    public function getOrderIdAttribute($order_id){
        return Order::find($order_id);
    }


}
