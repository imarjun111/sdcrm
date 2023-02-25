<?php

namespace App\Services\Admin\Http\Controllers;

use Lucid\Units\Controller;
use App\Features\LoginViewFeature;

class AdminController extends Controller
{
    public function login(){
        return $this->serve(new LoginViewFeature());
    }
}
