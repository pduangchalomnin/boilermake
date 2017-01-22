<?php

namespace App\Http\Controllers;

use App\Dine;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topIndianFoods = $this->getTop5IndianFood();
        $topChineseFoods = $this->getTop5ChineseFood();
        $topAmericanFoods = $this->getTop5AmericanFood();
        $topBreakfast = $this->getTop4Breakfast();
        $topLunch = $this->getTop4Lunch();
        $topDinner = $this->getTop4Dinner();
        //dd($topIndainFoods);
        return view('index',compact('topIndianFoods','topChineseFoods','topAmericanFoods',
                                    'topBreakfast','topLunch','topDinner'));
    }

        private function getTop5IndianFood(){
            $expected = 5;
            $list = $this->getTopFoodByTag('indian',$expected);

            $this->fullfillWithDummy($list, $expected);
            return $list;
        }

            private function getTopFoodByTag($tag,$amount){
//                dd(DB::select(DB::raw('(SELECT ROUND(AVG(star),0) as starRating,auth0id FROM users
//                                                         join reviews on users.auth0id = reviews.chiefUid group by auth0id)')));
                $list = DB::table('dines')->join('users', 'users.auth0id', '=', 'dines.uid')
                                        ->join('tags','tags.did','=','dines.id')
                                        ->join(DB::raw('(SELECT ROUND(AVG(star),0) as starRating,users.auth0id FROM users
                                                         join reviews on users.auth0id = reviews.chiefUid group by auth0id) AS a')
                                                ,'users.auth0id','=','dines.uid')
                                        ->where('tag','=',$tag)
                                        ->orderBy('starRating','desc')
                                        ->limit($amount)
                                        ->distinct()
                                        ->get();
                return $list;
            }

        private function getTop5ChineseFood(){
            $expected = 5;
            $list = $this->getTopFoodByTag('chinese',$expected);

            $this->fullfillWithDummy($list, $expected);
            return $list;
        }

        private function getTop5AmericanFood(){
            $expected = 5;
            $list = $this->getTopFoodByTag('american',$expected);

            $this->fullfillWithDummy($list, $expected);
            return $list;
        }

        private function getTop4Breakfast(){
            $expected = 4;
            $list = $this->getTopFoodByTag('breakfast',$expected);

            $this->fullfillWithDummy($list, $expected);
            return $list;
        }

        private function getTop4Lunch(){
            $expected = 4;
            $list = $this->getTopFoodByTag('lunch',$expected);

            $this->fullfillWithDummy($list, $expected);
            return $list;
        }

        private function getTop4Dinner(){
            $expected = 4;
            $list = $this->getTopFoodByTag('dinner',$expected);

            $this->fullfillWithDummy($list, $expected);
            return $list;
        }

    public function test()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        if(!empty(Input::get('keyword'))) {
            $keyword = Input::get('keyword');
            $foodList = DB::table('dines')
                ->where('name','LIKE','%'.$keyword.'%')
                ->orderBy('dineDate','asc')
                ->distinct()
                ->get();

            $foodListByTag =  DB::table('dines')->join('users', 'users.auth0id', '=', 'dines.uid')
                ->join('tags','tags.did','=','dines.id')
                ->where('tag','=',$keyword)
                ->orderBy('dineDate','asc')
                ->distinct()
                ->get();

            $foodList = $foodList->union($foodListByTag);
            return view('search',compact('foodList'));
        } else {
            $foodList = DB::table('dines')
                ->orderBy('dineDate','asc')
                ->distinct()
                ->get();
             return view('search',compact('foodList'));
        }

    }

        private function fullfillWithDummy($list, $expected)
        {
            $count = count($list);
            while ($count < $expected) {
                $tmpDine = new Dine();
                $tmpDine->name = "NaN";
                $tmpDine->pic = "/uploads/food_small_empty.jpg";
                $tmpDine->detail = "";
                $tmpDine->price = 0;
                $tmpDine->address = "";
                $list->push($tmpDine);
                $count++;
            }
        }

    public function searchByKeyword($keyword){

    }
    
}
