<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CreditCardApprovedMail extends Mailable
{
    public $MSG;

    public function __construct($MSG)
    {
        $this->MSG = $MSG;
    }

    public function build()
    {
        return $this->view('CreditCardStatusMail') // Ensure the view is named correctly
                    ->with('MSG', $this->MSG)
                    ->subject('Confirm Your Registration MSG');
    }
}
