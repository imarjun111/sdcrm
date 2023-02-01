<?php

namespace App\Services\Admin\Http\Controllers;

use Lucid\Units\Controller;

class AdminController extends Controller
{
    public function login(){
        return $this->serve(new ListArticlesFeature());
    }
}
