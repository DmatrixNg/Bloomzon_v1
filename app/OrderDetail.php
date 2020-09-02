<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $guarded = [];

  protected $keyType = 'string';


  protected $fillable = [
      'id', 'order_id', 'seller_id','seller_type', 'product_id',
      'product','status'
    ];


    public function getProductAttribute($prod)
    {
        return json_decode($prod);
    }

    /**
     * Get the OrderDetail for the buyer.
     */
    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }
    /**
     * Get the OrderDetail for the buyer.
     */
    public function products()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    /**
    * Get the model that the seller belongs to.
    */
    public function seller()
    {
      return $this->morphTo(__FUNCTION__, 'seller_type', 'seller_id');
    }


}
