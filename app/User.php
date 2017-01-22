<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use DB;

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

    public function getRating(){
        $rating = DB::table('reviews')->select(DB::raw('ROUND(AVG(star),0) as starRating'))->where('chiefUid','=',$this->auth0id)->first();
        return $rating->starRating;
    }

    public function getTotalRating(){
        $rating = DB::table('reviews')->select(DB::raw('COUNT(star) as count'))->where('chiefUid','=',$this->auth0id)->first();
        return $rating->count;
    }
}
