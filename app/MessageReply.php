<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageReply extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message', 'replyer',
    ];

    /**
     * Get the message that owns the reply.
     */
    public function message()
    {
        return $this->belongsTo('App\Message');
    }

}
