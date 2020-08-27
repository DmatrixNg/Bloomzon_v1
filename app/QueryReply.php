<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueryReply extends Model
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
     * Get the query that owns the reply.
     */
    public function querry() //am using double 'r' because i cant use query as function name in a model
    {
        return $this->belongsTo('App\Query');
    }
}
