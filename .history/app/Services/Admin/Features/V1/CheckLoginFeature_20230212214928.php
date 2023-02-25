<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Admin\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Models\User;
use Auth;

class CheckLoginFeature extends Feature
{
    public function handle(UserLoginRequest $request)
    {
       //97 $credentials = $request->getCredentials();
        $credentials =  $request->only(['username', 'password']);
        // echo $request['username'];die;
        $user = User::where('username',$request['username'])->first();
       print_r($user);die;
      if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard');
    }

    return 'Failure';
    }
}
