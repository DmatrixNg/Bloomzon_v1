<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
      'total_amount','order_reference',
      'billing_address',
'delivery_agent_id',
'payment_method',
'payment_status',
'order_notes',
'delivery_fee',
'status','pickup_id'
    ];

    /**
     * Get the owning orderable model.
     */
    public function orderable()
    {
        return $this->morphTo();
    }

    public function orders()
    {
        return $this->morphMany('App\Order', 'orderable');
    }
    /**
     * Get the OrderDetail for the buyer.
     */
    public function order_details()
    {
        return $this->hasMany('App\OrderDetail', 'order_id');
    }


}
