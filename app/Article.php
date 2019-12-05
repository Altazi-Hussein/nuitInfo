<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Commentaire, Vote};

class Article extends Model
{
    public function comments()
    {
        return $this->hasMany('Commentaire');
    }

    public function votes()
    {
        return $this->morphMany('Vote', 'votable');
    }
}
