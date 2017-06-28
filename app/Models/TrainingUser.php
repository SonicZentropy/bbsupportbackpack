<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class TrainingUser extends Model
{
    use CrudTrait;

    protected $guarded = [];

    public function getUser() {
        //Column not found: 1054 Unknown column 'users.trainings_users_id' in 'where clause'
        //(SQL: select * from `users` where `users`.`trainings_users_id` = 1 and `users`.`trainings_users_id` is not null limit 1)
        return $this->belongsTo(User::class, 'user_id');
    }
}
