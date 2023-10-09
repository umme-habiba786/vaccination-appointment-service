<?php

namespace App\Events;

class AppointmentCreated extends Event
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
