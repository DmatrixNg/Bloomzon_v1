<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManufacturerRequest extends Model
{
    /**
     * Get all of the admin that own the request.
     */
    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    /**
     * Get all of the manufacturer that own the request.
     */
    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

    /**
     * Get all of the product that own the request.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
