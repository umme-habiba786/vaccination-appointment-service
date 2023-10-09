<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;

class AppointmentCreatedJob extends Job
{
    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        Log::info('Appointment created:' . json_encode($data));
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
