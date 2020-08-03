<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThanksMail extends Mailable
{
    use Queueable, SerializesModels;
    private $param;

    /**
     * Create a new message instance.
     *
     * @param $param
     */
    public function __construct($param)
    {
        $this->param = $param;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $param = $this->param;
        return $this->subject('お問い合せありがとうございます')->view('thanks', compact('param'));
    }
}
