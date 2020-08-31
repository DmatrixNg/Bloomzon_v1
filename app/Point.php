<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
  // protected $table = 'points';
  protected $guarded = [];


  protected $fillable = [
      'id','user_id', 'purchase_count', 'amount',
      'total_point','used_point'
    ];


    /**
     * Get the owning pointable model.
     */
    public function pointable()
    {
        return $this->morphTo();
    }


}
