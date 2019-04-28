<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {

        $this->showroom_city    = $request->showroom_city;
        $this->customer_name    = $request->customer_name;
        $this->customer_mail    = $request->customer_mail;
        $this->stone_name       = $request->stone_name;
        $this->stone_thickness  = $request->stone_thickness;
        $this->stone_elements   = $request->stone_elements;
        $this->stone_edge       = $request->stone_edge;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $this->subject('Kontakt poprzez stronę internetową - kamien^design');

        return $this->markdown('emails.order')
                    ->with('customer_name', $this->customer_name)
                    ->with('request', $request);
    }
}
