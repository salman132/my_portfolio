<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email,$subject,$text,$file;


    public function __construct($email,$subject,$text,$file)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->text = $text;
        $this->file = $file;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (file_exists($this->file)){
            return $this->from($this->email)
                ->subject($this->subject)
                ->view('admin.mail.reply')->with('text',$this->text)
                ->attach($this->file);
        }
        else{
            return $this->from($this->email)
                ->subject($this->subject)
                ->view('admin.mail.reply')->with('text',$this->text);
        }
    }
}
