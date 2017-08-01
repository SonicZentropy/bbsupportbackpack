<?php

namespace App\Mail;

use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\TrainingRegistration;
use App\Models\TrainingSession;
use App\Models\User;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $tr;
    private $user;
    /**
     * Create a new message instance.
     * @param tr Train reg model
     * @return void
     */
    public function __construct(TrainingRegistration $tr, $user)
    {
        $this->tr = $tr;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //\Debugbar::addMessage('Sending EMAIL');
	    $selectedTraining = TrainingSession::where('id', $this->tr->training_session_id)->first();

        return $this->from('ofs@pulaskitech.edu')
                    ->subject('Blackboard Training Registration Confirmation')
	                ->with([ //2017-04-08 08:10:00
	                	//'first_date' => $selectedTraining->first_session,
                        'first_date' => prettydate($selectedTraining->first_session),
		                'second_date' => prettydate($selectedTraining->second_session),
	                ])
                    ->view('mails.regConfirmMail');
    }
}
