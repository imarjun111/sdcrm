<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Admin\Requests\UserLogin;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class CheckLoginFeature extends Feature
{
    public function handle(Request $request)
    {
        return $request;
    }
}
