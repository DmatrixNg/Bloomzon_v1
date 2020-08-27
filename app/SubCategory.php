<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    /**
     * Get the category that owns the subCategory.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function products(){
        return $this->hasMany('App\Product','sub_category_id','id');
    }

}
