<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class TagController extends Controller {
  public function getSuggestion($word) {
    $list = DB::table('tags')->select(DB::raw('count(*) as count, tag'))->where('tag','like','%'.$word.'%')
                    ->groupBy('tag')->orderBy('count','desc')->get();
    return response()->json($list);
  }
}