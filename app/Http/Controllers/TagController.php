<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use DB;

class TagController extends Controller {
  public function getSuggestion() {
      $listFood = DB::table('dines')->select('name')
          ->where('name','like','%'.Input::get('search').'%')
          ->orderBy('dineDate','asc')
          ->limit(2)
          ->get();

      $collection = collect();
        foreach ($listFood as $food){
            $collection->push(['tag'=>$food->name]);
        }
      $list = DB::table('tags')->select(DB::raw('count(*) as count, tag'))->where('tag','like','%'.Input::get('search').'%')
                    ->groupBy('tag')->orderBy('count','desc')->get();
      foreach ($list as $tag){
          $collection->push(['tag'=>$tag->tag]);
      }
      //dd($collection);
      return response()->json($collection);
  }
}
