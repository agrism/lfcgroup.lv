<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class RequestConsultationForm extends Mailable
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build(): Mailable
    {
        return $this->view('emails.request-consultation')->subject('New Contact Form Submission lfcgroup.lv');
    }
}
