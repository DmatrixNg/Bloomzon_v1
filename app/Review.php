<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function getProductIdAttribute($product_id){
        return Product::find($product_id);
    }

    public function getBuyerIdAttribute($buyer_id){
        return Buyer::find($buyer_id);
    }

    /**
     * Get the BUyer that owns the review.
     */
    public function buyer()
    {
        return $this->belongsTo('App\Buyer');
    }

    /**
     * Get the owning orderable model.
     */
    public function review()
    {
        return $this->morphTo();
    }

    public function seller(){
        return $this->belongsTo('App\Seller','seller_id','id');
    }

    public function replies(){
        return $this->hasMany('\App\ReviewReply','review_id');
    }


}
