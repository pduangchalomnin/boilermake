<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function dine(){
        return $this->belongsTo('App\Customer','id','did');
    }
}
