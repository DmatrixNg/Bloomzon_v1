<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\This;
use App\Notifications\EmailVerification;
use App\Notifications\ResetPassword as Notification;

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
        'last_login' => 'datetime',
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

    // /**
    //  * Get all of the subscriptions's comments.
    //  */
    // public function products()
    // {
    //     return $this->hasMany(Product::where('product_type', 'seller')->where('seller_id', $this->id)->get());
    // }
    /**
     * Get all of the user's products.
     */
    public function products()
    {
        return $this->morphMany('App\Product', 'seller');
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
        return $this->morphMany('App\Order', 'orderable');
    }
    /**
     * Get all of the user's orders.
     */
    public function order_details()
    {
        return $this->morphMany('App\OrderDetail', 'seller');
    }
    /**
     * Custom password reset notification.
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new Notification('seller',$token));
    }

    /**
     * Send email verification notice.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerification('seller'));
    }
}
