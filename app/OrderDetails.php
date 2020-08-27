<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $guarded = [];

    public function getProductAttribute($prod)
    {
        return json_decode($prod);
    }

    public function order()
    {
        return $this->belongsTo('\App\Order', 'order_id', 'id');
    }

    public function getBuyerIdAttribute($id)
    {
        return Buyer::find($id);
    }
    public function getSellerIdAttribute($seller_id)
    {
        switch ($this->order_type) {
            case ('seller'):
                return Seller::find($seller_id);
            case 'fast_food_grocery':
                return FastFoodGrocery::find($seller_id);
            case 'professional':
                return Professional::find($id);
            default:
                return null;
        }
    }
    public function getOderIdAttribute($order_id)
    {
        return Order::find($order_id);
    }
}
