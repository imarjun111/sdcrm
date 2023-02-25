<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Admin\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Lucid\Units\Feature;
use Auth;

class CheckLoginFeature extends Feature
{
    public function handle(UserLoginRequest $request)
    {
        $credentials = $request->getCredentials();
      //  print_r(Auth::validate($credentials));die;
        if(!Auth::validate($credentials)):
            return redirect()->to('admin')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
}
