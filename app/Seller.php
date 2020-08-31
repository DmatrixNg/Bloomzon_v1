<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Seller extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // set the default guard for this model
    protected $guard = 'seller';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


//
    public function seller_wallet(){
        return $this->hasOne('App\SellerWallet','seller_id','id');
    }

    /**
     * Get all of the post's comments.
     */
    public function messages()
    {
        return $this->morphMany('App\Message', 'messageable');
    }

    /**
     * Get all of the subscriptions's comments.
     */
    public function products()
    {
        return $this->hasMany(Product::where('product_type', 'seller')->where('seller_id', $this->id)->get());
    }

    /**
     * Get all of the subscriptions's comments.
     */
    public function subscriptions()
    {
        return $this->morphMany('App\Subscription', 'subscriptionable');
    }

    /**
     * Get all of the products for this seller.
     */
    // public function products()
    // {
    //     return $this->hasMany('App\Product');
    // }


    public function getProductsAttribute(){
        return Product::where('seller_id',$this->id)->where('product_type','seller')->get();
    }

    public function getReviewsAttribute(){
        return Review::where('seller_id',$this->id)->where('review_type','seller')->get();
    }

    /**
     * Get all of the user's points.
     */
    public function points()
    {
        return $this->morphOne('App\Point', 'pointable');
    }

    /**
     * Get all of the user's orders.
     */
    public function orders()
    {
        return $this->morphMany('App\OrderDetail', 'orderable');
    }
}
