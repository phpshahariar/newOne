<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberEmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $member;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $token;
    public function __construct($member)
    {
        $this->member = $member;
//        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.verified')->with('member', $this->member);
    }
}
