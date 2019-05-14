<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Stone;


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

        $this->request = $request;

        $oStone = Stone::find($request->stone_name);

        $this->stone_name = $oStone->title;




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
            ->with('request', $this->request)
            ->with('stone_name', $this->stone_name);
    }
}
