<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), '📩 Portfolio Contact')
            ->replyTo($this->data['email'], $this->data['name'])
            ->subject($this->data['subject'])
            ->view('Portfolio.emails.contact_mail')
            ->with([
                'data' => $this->data,
                'profile_image' => $this->data['profile_image'] ?? null
            ]);
    }


}
