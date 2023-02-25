<?php

namespace App\Services\Admin\Http\Controllers;

use Lucid\Units\Controller;
use App\Features\v1\LoginViewFeature;

class AdminController extends Controller
{
    public function login(){
        return $this->serve(new LoginViewFeature());
    }
}
