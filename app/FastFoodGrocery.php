<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class FastFoodGrocery extends Authenticatable
{
    protected $guard = 'fast_food_grocery';
    protected $guarded = [];


    // public function seller_wallet(){
    //     return $this->hasOne('App\SellerWallet','seller_id','id');
    // }

    /**
     * Get all of the post's comments.
     */
    public function messages()
    {
        return $this->morphMany('App\Message', 'messageable');
    }


    // public function products(){
    //     return $this->hasMany('App\Product','seller_id','id');
    // }

    public function getProductsAttribute(){
        return Product::where('seller_id',$this->id)->where('product_type','fast_food_grocery')->get();
    }

    public function getReviewsAttribute(){
        return Review::where('seller_id',$this->id)->where('review_type','fast_food_grocery')->get();
    }
}
