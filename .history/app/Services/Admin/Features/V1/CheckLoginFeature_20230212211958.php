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
       //97 $credentials = $request->getCredentials();
        $credentials =  $request->only(['username', 'password']);
      //  print_r($credentials);die;
      $arr = ['username'=>'test111','password'=>'12345;']
        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }
}
