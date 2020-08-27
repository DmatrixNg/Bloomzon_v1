<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'order_details';
    protected $guarded = [];

    public function buyer(){
        return $this->belongsTo('App\User','buyer_id','id');
    }

    public function order(){
        return $this->belongsTo('App\Order','order_id','id');
    }
    public static function myPoints($id){
        
        return  self::select(['order_id'])->where('buyer_id',$id)->distinct()->with(['order'])->get();
    }
}
