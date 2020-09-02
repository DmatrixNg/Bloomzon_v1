<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    public function getBuyerIdAttribute($buyerId){
        return Buyer::find($buyerId);
    }

    public function getSellerIdAttribute($sellerId){

        switch($this->product_type){
            case 'fast_food_grocery':
                return FastFoodGrocery::find($sellerId);
            break;

            case 'seller':
                return Seller::find($sellerId);
            break;

            case 'professional':
                return Professional::find($sellerId);
            break;
            case 'manufacturer':
                return Manufacturer::find($sellerId);
            break;

        }
    }
    public function getSellerClassAttribute($sellerId){

        switch($this->product_type){
            case 'fast_food_grocery':
                return (string)FastFoodGrocery::class;
            break;

            case 'seller':
                return (string)Seller::class;
            break;

            case 'professional':
                return (string)Professional::class;
            break;
            case 'manufacturer':
                return (string)Manufacturer::class;
            break;

        }
    }
    public function getCategoryIdAttribute($Id){
        if($this->product_type == 'fast_food_grocery'){
            return FoodCatalogue::find($Id);
        }else{
            return Category::find($Id);
        }
    }

    public function reviews(){
        return $this->hasMany('App\Review','product_id','id');
    }

    public function getAvatarsAttribute($value){
        $avatars = json_decode($value);
        return $avatars;
    }

    public function getProductColorAttribute($val){
        return json_decode($val);
    }


    public function seller(){
        return $this->belongsTo('App\Seller','seller_id','id');
    }

    public function __toString()
    {
        return (string)$this->id;
    }
}
