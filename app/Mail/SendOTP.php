<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOTP extends Mailable
{
    use Queueable, SerializesModels;
    
    public $OTP;

    /**
     * Create a new message instance.
     */
    public function __construct($OTP)
    {
        $this->OTP = $OTP;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('OTP') // Ensure the view is named correctly
                    ->with('OTP', $this->OTP)
                    ->subject('Confirm Your Registration OTP');
    }
}
