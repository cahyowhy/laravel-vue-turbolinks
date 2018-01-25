<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {
    protected $fillable = ['id', 'description', 'user_id',];
}
