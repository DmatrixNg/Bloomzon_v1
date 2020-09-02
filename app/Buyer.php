<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Buyer extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // set the default guard for this model
    protected $guard = 'buyer';

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
        'password', 'remember_token', 'security_pin',
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

    /**
     * Get the reviews for the buyer.
     */
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }


    /**
     * Get all of the user's points.
     */
    public function point()
    {
        return $this->morphOne('App\Point', 'pointable');
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
     * Get all of the user's orders.
     */
    public function orders()
    {
        return $this->morphMany('App\Order', 'orderable');
    }
    /**
     * Get all of the payments.
     */
    public function payments()
    {
        return $this->morphMany('App\Payment', 'payer');
    }

    /**
     * Get all of the payments.
     */
    public function cards()
    {
        return $this->morphMany('App\Card', 'user');
    }


}
