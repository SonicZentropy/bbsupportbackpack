<?php

namespace App\Mail;

use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\TrainingRegistration;
use App\Models\TrainingSession;

class OnlineRegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $tr;
    private $user;

    /**
     * Create a new message instance.
     * @param Train|TrainingRegistration $tr
     * @param User $user
     * @internal param Train $tr reg model
     */
    public function __construct(TrainingRegistration $tr, User $user)
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
        return $this->from('ofs@uaptc.edu')
            ->subject('Blackboard Online Training Registration Confirmation')
            ->with([
                'name' => $this->user->name,
            ])
            ->view('mails.onlineRegConfirmMail');
    }
}
