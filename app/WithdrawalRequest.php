<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    protected $guarded = [];

    public function getUserIdAttribute($id){
        $reqby = $this->user_type;
        $user = null;
        switch($reqby){
            case 'buyer':
                 $user = Buyer::find($id);
            break;
            case 'professional':
                 $user = Professional::find($id);
            break;
            case 'admin':
                $user = Admin::find($id);
            break;
            case 'networking_agent':
                $user = NetworkingAgent::find($id);
            break;
            case 'seller':
                $user = Seller::find($id);
            break;
            case 'fast_food_grocery':
                $user = FastFoodGrocery::find($id);
            break;
            default :
            $user = null;
        break;
        }
        return $user;
    }

    
}
