<?php

namespace App\Services\Admin\Features\V1;
use App\Domains\Admin\Jobs\RespondWithViewJob;
use App\Domains\Admin\Requests\RespondWithViewJob;

use Illuminate\Http\Request;
use Lucid\Units\Feature;

class LoginViewFeature extends Feature
{
    public function handle(Request $request)
    {
        $template = 'admin::welcome';
        return $this->run(new RespondWithViewJob($template));
    }
}
