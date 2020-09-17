<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\EmailVerification;
use App\Notifications\ResetPassword as Notification;

class Manufacturer extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;

    // set the default guard for this model
    protected $guard = 'manufacturer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * Get all of the post's comments.
     */
    public function messages()
    {
        return $this->morphMany('App\Message', 'messageable');
    }

    /**
     * Get all of the chats for this manufacturer.
     */
    public function chats()
    {
        return $this->hasMany('App\Chat');
    }

    /**
     * Get all of the request for this manufacturer.
     */
    public function manufacturer_requests()
    {
        return $this->hasMany('App\ManufacturerRequest');
    }

    /**
     * Custom password reset notification.
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new Notification('manufacturer',$token));
    }

    /**
     * Send email verification notice.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerification('manufacturer'));
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
