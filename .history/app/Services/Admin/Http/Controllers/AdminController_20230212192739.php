<?php

namespace App\Services\Admin\Http\Controllers;

use Lucid\Units\Controller;
use App\Services\Admin\Features\V1\LoginViewFeature;
use App\Services\Admin\Features\V1\CheckLoginFeature;

class AdminController extends Controller
{
    public function login(){
        return $this->serve(LoginViewFeature::class);
    }

    public function checklogin(){
        return $this->serve(CheckLoginFeature::class);
    }

     /**
     * Show user online status.
     */
    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->name . " is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
            else
                echo $user->name . " is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
        }
    }
}
