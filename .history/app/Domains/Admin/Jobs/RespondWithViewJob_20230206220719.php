<?php

namespace App\Domains\Admin\Jobs;

use Lucid\Units\Job;

class RespondWithViewJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($template)
    {
        //
        $this->template = $template;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        return $this->template;
    }
}
