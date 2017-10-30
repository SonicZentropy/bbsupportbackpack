<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class BBRestModel extends Model
{
    use CrudTrait;
    protected $table = 'bbrest';
}
