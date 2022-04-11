<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels;
    public $join;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($join)
    {
        $this->join=$join;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Tour Plan')->view('website.emails.join-approve');
    }
}
