<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Http\Jobs\RespondWithJsonJob;

use Illuminate\Http\Request;
use Lucid\Units\Feature;

class LoginViewFeature extends Feature
{
    public function handle(Request $request)
    {
        return $this->run(new RespondWithViewJob(
            view: 'welcome'
        ));
    }
}
