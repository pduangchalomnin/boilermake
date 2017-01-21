<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dine extends Model
{
    public function tag(){
        return $this->hasMany('App\Tag', 'did', 'id');
    }
}
