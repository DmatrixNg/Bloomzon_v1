<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $guarded = [];


  protected $fillable = [
      'id', 'order_id', 'seller_id', 'product_id',
      'product','status'
    ];


    /**
     * Get the owning orderable model.
     */
    public function orderable()
    {
        return $this->morphTo();
    }

    /**
     * Get the OrderDetail for the buyer.
     */
    public function order()
    {
        return $this->belongsTo('App\Order', 'id');
    }

}
