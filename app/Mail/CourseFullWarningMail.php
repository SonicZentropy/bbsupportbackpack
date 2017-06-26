<?php

namespace App\Mail;

use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\TrainingSession;

class CourseFullWarningMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ts;

    public function __construct(TrainingSession $ts)
    {
        $this->ts = $ts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //\Debugbar::addMessage('Sending EMAIL');

        return $this->from('ofs@pulaskitech.edu')
            ->subject('Blackboard Training Registration Confirmation')
            ->with([ //2017-04-08 08:10:00
                //'first_date' => $selectedTraining->first_session,
                'first_date' => $this->ts->first_session,
                'second_date' => $this->ts->second_session
            ])
            ->view('mails.courseFullMail');
    }
}
