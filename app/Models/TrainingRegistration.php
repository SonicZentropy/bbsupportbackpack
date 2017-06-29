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

    public function GetRelatedUser() {
        return $this->user()->get()->first();
    }

    public function GetRelatedUserPersonalID() : string {
        return $this->GetRelatedUser()->personal_id;
    }

    public function GetRelatedUserName() : string {
        return $this->GetRelatedUser()->name;
    }

    public function scopeOfSession($query) {
        return $query->where('training_session_id', '1');
    }
}
