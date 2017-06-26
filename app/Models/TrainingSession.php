<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    use CrudTrait;

    protected $fillable = ['id', 'first_session', 'second_session', 'training_type', 'number_enrolled', 'title', 'created_at', 'updated_at'];
    public $timestamps = true;


    public function users() {
        return $this->belongsToMany(User::class, 'trainings_users', 'training_id', 'user_id');
    }
}
