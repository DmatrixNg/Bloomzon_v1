<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Manufacturer extends Authenticatable
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

}
