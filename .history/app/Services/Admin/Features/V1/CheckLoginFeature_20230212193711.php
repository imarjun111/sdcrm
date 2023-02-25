<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Admin\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class CheckLoginFeature extends Feature
{
    public function handle(UserLoginRequest $request)
    {
        return 'ok';
    }
}
