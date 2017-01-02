<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $email;
    public $need;
    public $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $need, $message)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->need    = $need;
        $this->text = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this    ->from($this->email)
                        ->view('contact.email_contact');
    }
}
