<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactedMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    public $message;



    public function __construct($email, $message)
    {
        $this->email = $email;
        $this->message = $message;
    }





    public function build()
    {
        return $this->markdown('mail.contacted-message');
    }
}
