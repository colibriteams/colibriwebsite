<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $organization;
    public $theMessage;
    public $type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $organization, $message, $type)
    {
        $this->name = $name;
        $this->email = $email;
        $this->organization = $organization;
        $this->theMessage = $message;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->type == 'job-updates') {
            return $this->subject('Job Updates Request')->view('mails.contact-form');
        }
        return $this->view('mails.contact-form');
    }
}
