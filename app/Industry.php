<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
  protected $guarded = [];

  public function agent(){
    return $this->belongsTo('App\Agent');
  }

  public function customer(){
    return $this->hasMany('App\Customer');
  }
}
