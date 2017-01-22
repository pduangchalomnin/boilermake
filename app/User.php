<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    public function dine(){
        return  $this->hasMany('App\Dine','uid','auth0id');
    }

    public function customer(){
        return $this->hasMany('App\Customer','customerUid','auth0id');
    }

    public function reviewTo(){
        return $this->hasMany('App\Review','customerUid','auth0id');
    }

    public function reviewBy(){
        return $this->hasMany('App\Review','chiefUid','auth0id');
    }
}
