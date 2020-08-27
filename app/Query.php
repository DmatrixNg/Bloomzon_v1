<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'title', 'admin_id'
    ];

    /**
     * Get the replies for the query.
     */
    public function query_replies()
    {
        return $this->hasMany('App\QueryReply');
    }
}
