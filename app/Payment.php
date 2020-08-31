<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'id',
      'type',
      'transaction_id',
      'data',
    ];

    /**
     * Get the owning payer model.
     */
    public function payer()
    {
        return $this->morphTo();
    }
}
