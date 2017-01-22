<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use DB;

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
        $topIndainFoods = $this->getTop5IndianFood();
        $topChineseFoods = $this->getTop5ChineseFood();
        $topAmericaFoods = $this->getTop5AmericanFood();
        //dd($topIndainFoods);
        return view('index',compact('topIndainFoods','topChineseFoods','topAmericaFoods'));
    }

        private function getTop5IndianFood(){
            $list = $this->getTopFoodByTag('indian',5);
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
                                        ->get();
                return $list;
            }

        private function getTop5ChineseFood(){
            $list = $this->getTopFoodByTag('chinese',5);
            return $list;
        }

        private function getTop5AmericanFood(){
            $list = $this->getTopFoodByTag('american',5);
            return $list;
        }

    public function test()
    {
        return view('welcome');
    }

    public function search()
    {
        return view('search');
    }
}
