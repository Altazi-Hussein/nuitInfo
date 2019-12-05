<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Vote extends Model
{
    public function user()
    {
        return $this->belongTo('User');
    }

    public function votable()
    {
        return $this->morphTo();
    }
}
