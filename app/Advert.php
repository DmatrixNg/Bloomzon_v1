<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $guarded = [];


    public function getUserIdAttribute($id){
        $adby = $this->ads_by;
        $user = null;
        switch($adby){
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
            default :
            $user = null;
        break;
        }
        return $user;
    }
}
