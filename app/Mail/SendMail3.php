<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail3 extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details =$details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $details = $this->details;
//        return $this->subject('Сообшение от пользователя' )->view ('emails.message3');
        return $this->subject('Curriculum Vitae - CV' )
            ->view('emails.message3', compact('details'))
            ->attach($details['cv']->getrealPath(), [
                'as' => $details['cv']->getClientOriginalName(),
            ]);
    }
}
