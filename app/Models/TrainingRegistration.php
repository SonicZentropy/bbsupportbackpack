<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;
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

    public function scopeDate($query, $value) {
        if ($value == 1)
            return $this->GetCompletedTrainings($query);
        elseif($value == 2)
            return $this->GetCurrentTrainings($query);
        else
            return $this->GetFutureTrainings($query);


    }

    private function GetCompletedTrainings($query) {
        return $query->whereHas('training', function($q) {
            $q->whereDate('second_session', '<', Carbon::today()->toDateTimeString());
        });
    }

    private function GetCurrentTrainings($query) {
        return $query->whereHas('training', function($q) {
            $q->whereDate('first_session', '<', Carbon::today()->toDateTimeString())
              ->whereDate('second_session', '>', Carbon::today()->toDateTimeString());
        });
    }

    private function GetFutureTrainings($query) {
        return $query->whereHas('training', function($q) {
            $q->whereDate('first_session', '>', Carbon::today()->toDateTimeString());
        });
    }

}
