<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Vote extends Model
{
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function votable()
    {
        return $this->morphTo();
    }
}
