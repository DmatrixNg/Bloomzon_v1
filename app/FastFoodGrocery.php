<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\EmailVerification;
use App\Notifications\ResetPassword as Notification;

class FastFoodGrocery extends Authenticatable
{
  use HasApiTokens, Notifiable;

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
        return $this->hasManyThrough('App\OrderDetail', 'App\Order',
        'orderable_id'
      );
    }
    /**
     * Custom password reset notification.
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new Notification('fast_food_grocery',$token));
    }

    /**
     * Send email verification notice.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerification('fast_food_grocery'));
    }

    /**
     * Get all of the subscriptions's comments.
     */
    public function subscriptions()
    {
        return $this->morphMany('App\Subscription', 'subscriptionable');
    }

    public function is_subscribed()
    {
        $my_subscription = $this->subscriptions->where('end_date', '>', now())->first();

        if($my_subscription) {
            return $my_subscription;
        } else {
            return null;
        }

    }
}
