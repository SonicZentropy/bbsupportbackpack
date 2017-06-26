<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{

    public function chosenTraining()
    {
        //$one = $this->hasOne(Training::class);
        return TrainingSession::where('id', $this->training_session_id)->first();
    }

    public function user() {
        return $this->belongsTo(User::class, 'registered_user_id');
    }
}
