<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'request_type', 'password',
    ];

    /**
     * Get the owning commentable model.
     */
    public function messageable()
    {
        return $this->morphTo();
    }

    /**
     * Get the replies for the message.
     */
    public function message_replies()
    {
        return $this->hasMany('App\MessageReply');
    }

}
