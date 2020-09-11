<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  protected $fillable = [
    'user_id',
    'user_type',
      "authorization_code",
      "bin",
      "last4",
      "exp_month",
      "exp_year",
      "channel",
      "card_type",
      "bank",
      "country_code",
      "brand",
      "reusable",
      "signature",
      "account_name",
      "receiver_bank_account_number",
      "receiver_bank"

  ];

  public function user()
  {
      return $this->morphTo(__FUNCTION__, 'user_type', 'user_id');
  }
  public function users()
  {
      return $this->morphMany('App\Card', 'user');
  }
}
