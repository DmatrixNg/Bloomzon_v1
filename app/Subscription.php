<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{

    /**
     * Get the owning subscriptionable model.
     */
    public function subscriptionable()
    {
        return $this->morphTo();
    }
}
