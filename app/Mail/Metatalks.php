<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Metatalks extends Mailable 
{
    use Queueable, SerializesModels;
    
    public $subjet="Información de contacto";
    /**
     * Create a new message instance.
     * 
     *
     * @return void
     */
    
    public function __construct()
    {
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('email.nuevo-usuario');
        return $this->subject('Metatalks!')->view('email.nuevo-usuario');

    }
}
