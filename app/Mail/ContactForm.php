<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_city, $mail_name, $mail_address, $mail_phone, $mail_busines_name, $mail_title, $mail_text)
    {

        $this->mail_city = $mail_city;
        $this->mail_name = $mail_name;
        $this->mail_address =  $mail_address;
        $this->mail_phone = $mail_phone;
        $this->mail_busines_name = $mail_busines_name;
        $this->mail_title = $mail_title;
        $this->mail_text = $mail_text;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $this->subject('Kontakt poprzez stronę internetową - kamien^design');

        return $this->markdown('emails.contact')
                    ->with('mail_city', $this->mail_city)
                    ->with('mail_name', $this->mail_name)
                    ->with('mail_address', $this->mail_address)
                    ->with('mail_phone', $this->mail_phone)
                    ->with('mail_busines_name', $this->mail_busines_name)
                    ->with('mail_title', $this->mail_title)
                    ->with('mail_text', $this->mail_text);
    }
}
