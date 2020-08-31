<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  protected $fillable = [
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
      return $this->morphTo();
  }
}
