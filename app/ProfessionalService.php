<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessionalService extends Model
{
    public function getReviewsAttribute(){
        return Review::where('seller_id',$this->id)->where('review_type','professional')->get();
    }
}
