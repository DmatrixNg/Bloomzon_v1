<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    protected $fillable = ['base_currency','naira','pound','euro','usd','ad1_week','ad2_week','ad4_week'];


    // public function getNairaAttribute(){
    //     return 
    // }
}
