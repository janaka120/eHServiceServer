<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailtrap extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $reportInfo = []; 

    public function __construct($data)
    {        
        $this->reportInfo = $data;       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->reportInfo;
        return $this->subject($data['mail_subject'])
                    ->from($data['mail_from'])
                    ->view('mail', $data);
    }
}
