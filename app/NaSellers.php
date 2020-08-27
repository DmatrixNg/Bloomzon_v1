<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NaSellers extends Model
{
  protected $guarded = [];

  public function seller(){
    return $this->belongsTo('App\Seller','seller_id','id');
  }
  public function getAgentAttribute(){
    return NetworkingAgent::find($this->networking_agent_id);
  }
}
