<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{

    use CrudTrait;

    protected $guarded = [];

    public function chosenTraining()
    {
        //$one = $this->hasOne(Training::class);
        return TrainingSession::where('id', $this->training_session_id)->first();
    }

    public function training() {
        return $this->belongsTo(TrainingSession::class, 'training_session_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'registered_user_id');
    }
}
