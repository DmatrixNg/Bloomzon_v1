<?php

namespace App\Helpers;

    use Auth;

class GuardCheck {

  static function get(){

      if(Auth::guard('admin')->check()){return "admin";}
      elseif(Auth::guard('buyer')->check()){return "buyer";}
      elseif(Auth::guard('admin')->check()){return "admin";}
      elseif(Auth::guard('manufacturer')->check()){return "manufacturer";}
      elseif(Auth::guard('fast_food_grocery')->check()){return "fast_food_grocery";}
      elseif(Auth::guard('networking_agent')->check()){return "networking_agent";}
      elseif(Auth::guard('professional')->check()){return "professional";}
      elseif(Auth::guard('seller')->check()){return "seller";}
      elseif(Auth::guard('shopper')->check()){return "shopper";}
  }

}
