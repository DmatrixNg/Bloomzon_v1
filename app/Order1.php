<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order1 extends Model
{
    protected $guarded = [];

    public function order_details(){
        return $this->hasMany('\App\OrderDetails','order_id','id');
    }
}
