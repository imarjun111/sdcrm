<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Admin\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Lucid\Units\Feature;
use Auth;

class CheckLoginFeature extends Feature
{
    public function handle(Request $request)
    {
       // $credentials = $request->getCredentials();
        print_r($request);die;
        if(!Auth::validate($request)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
}
