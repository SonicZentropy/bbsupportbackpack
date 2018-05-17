<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompletionNoticeToIT extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $userID)
    {
        $this->name = $userName;
        $this->id = $userID;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ofs@uaptc.edu')
            ->subject('Blackboard Certification Completion')
            ->with([ //2017-04-08 08:10:00
                //'first_date' => $selectedTraining->first_session,
                'userName' => $this->name,
                'userID' => $this->id
            ])
            ->view('mails.completionNoticeToIT');
    }
}
