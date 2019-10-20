<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerContactEmail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $customerEmail;
    public function __construct($customerEmail)
    {
        $this->customerEmail = $customerEmail;

    }


    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->view('email.customer-email')->with('customerEmail', $this->customerEmail);
    }
}
