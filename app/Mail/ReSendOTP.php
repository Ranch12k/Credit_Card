<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReSendOTP extends Mailable
{
    use Queueable, SerializesModels;
    
    public $OTP;
    public $RgUserEamil;

    /**
     * Create a new message instance.
     */
    public function __construct(string $OTP, string $RgUserEamil)
    {
        $this->OTP = $OTP;
        $this->RgUserEamil = $RgUserEamil;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('OTP') // Ensure the view is named correctly
                    ->with('OTP', $this->OTP,$this->RgUserEamil)
                    ->subject('Confirm Your Registration OTP');
    }
}
