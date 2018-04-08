<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaminationType extends Model
{
  protected $guarded = [];

    public function specification(){
      return $this->belongsTo('App\Specification');
    }
}
