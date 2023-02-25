<?php

namespace App\Services\Admin\Http\Controllers;

use Lucid\Units\Controller;
use App\Services\Admin\Features\V1\LoginViewF public function login(){
    return $this->serve(LoginViewFeature::class);
}eature;

class AdminController extends Controller
{
    public function login(){
        return $this->serve(LoginViewFeature::class);
    }

    public function checKlogin(){
        return $this->serve(CheckLoginViewFeature::class);
    }
}
