<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallets extends Model
{
    //

protected $fillable = ["currency_name","address","label","balance"];

  public function user(){
    return $this->belongsTo("App\User");
  }
}
