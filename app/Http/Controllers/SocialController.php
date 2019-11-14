<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
class SocialController extends Controller
{

    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback(){
        $user=Socialite::driver('facebook')->user();
        return ($user->getAvatar());
    }

    public function github(){
        return Socialite::driver('github')->redirect();
    }
    public function sgithub(){
              Socialite::driver('github')->user();
        $user = Socialite::driver('github')->user();
            
    }
}
