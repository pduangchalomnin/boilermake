<?php
/**
 * Created by PhpStorm.
 * User: Patipat
 * Date: 1/21/2017 AD
 * Time: 7:35 AM
 */

namespace App\Repository;


use Auth0\Login\Contract\Auth0UserRepository;
use App\User;
use Auth0\Login\Auth0User;

class CustomAuthRepository implements Auth0UserRepository
{
    /* This class is used on api authN to fetch the user based on the jwt.*/
    public function getUserByDecodedJWT($jwt) {
        /*
         * The `sub` claim in the token represents the subject of the token
         * and it is always the `user_id`
         */
        $jwt->user_id = $jwt->sub;

        return $this->upsertUser($jwt);
    }

    public function getUserByUserInfo($userInfo) {
        $upsertData = $this->upsertUser($userInfo['profile']);
        return new Auth0User($userInfo['profile'],$userInfo['accessToken']);
    }

    protected function upsertUser($profile) {
        //dd($profile);
        $user = User::where("auth0id", $profile["user_id"])->first();

        if ($user === null) {
            // If not, create one
            $user = new User();
            $user->email = $profile["email"];
            $user->auth0id = $profile["user_id"];
            $user->image_url = $profile["picture"];
            $user->education = '';
            $user->given_name = $profile["given_name"];
            $user->family_name = $profile["family_name"];
            $user->save();
        }
        return $user;
    }

    public function getUserByIdentifier($identifier) {
        //Get the user info of the user logged in (probably in session)
        $user = \App::make('auth0')->getUser();

        if ($user===null) return null;

        // build the user
        $user = $this->getUserByUserInfo($user);
        // it is not the same user as logged in, it is not valid
        if ($user && $user->auth0id == $identifier) {
            return $user;
        }
    }

}