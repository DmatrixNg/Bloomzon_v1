<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package', 'start_date', 'end_date', 'payment_method', 'payment_ref', 'amount'
    ];

    /**
     * Get the owning subscriptionable model.
     */
    public function subscriptionable()
    {
        return $this->morphTo();
    }
    
}
