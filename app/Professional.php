<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Professional extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // set the default guard for this model
    protected $guard = 'professional';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

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

    /**
     * Get all of the post's comments.
     */
    public function messages()
    {
        return $this->morphMany('App\Message', 'messageable');
    }

    // public function getProductsAttribute(){
    //     return Product::where('seller_id',$this->id)->where('product_type','professional')->get();
    // }

    public function gallery()
    {
        return $this->hasMany('App\ShopGallery', 'professional_id');
    }
    public function products()
    {
        return $this->morphMany('App\Product', 'seller');
    }

    public function getReviewsAttribute(){
        return Review::where('seller_id',$this->id)->where('review_type','professional')->get();
    }

    /**
     * Get all of the user's orders details.
     */
    public function order_details()
    {
        return $this->morphMany('App\OrderDetail', 'seller');
    }

    /**
     * Get all of the user's orders.
     */
    public function orders()
    {
        return $this->morphMany('App\Order', 'orderable');
    }
}
