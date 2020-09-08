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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login' => 'datetime',

    ];
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
    public function products()
    {
        return $this->morphMany('App\Product', 'seller');
    }

    public function getProductsAttribute(){
        return Product::where('seller_id',$this->id)->where('product_type','fast_food_grocery')->get();
    }

    public function getReviewsAttribute(){
        return Review::where('seller_id',$this->id)->where('review_type','fast_food_grocery')->get();
    }

    public function orders()
    {
        return $this->morphMany('App\Order', 'orderable');
    }
    /**
     * Get all of the user's orders.
     */
    public function order_details()
    {
        return $this->morphMany('App\OrderDetail', 'seller');
    }
}
