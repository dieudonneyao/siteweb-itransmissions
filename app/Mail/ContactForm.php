<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;

class ContactForm extends Mailable
{
    public $contact;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact=$contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->contact['email'];

        return $this
            ->markdown('emails.contactMail')
            ->from('no-reply@afran2021.org')
            ->to($email)
            ->subject("Newsletter nexLevel")
            ->with([
                'contact' => $this->contact
            ]);
    }

}
