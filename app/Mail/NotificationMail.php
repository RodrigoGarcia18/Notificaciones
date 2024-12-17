<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use SerializesModels;

    public $subject;
    public $content; // Renombramos la variable a $content

    public function __construct($subject, $content)
    {
        $this->subject = $subject;
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view('emails.notification')
                    ->with([
                        'content' => $this->content, // Pasamos la nueva variable a la vista
                    ]);
    }
}
