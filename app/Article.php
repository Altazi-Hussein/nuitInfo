<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Commentaire, Vote, User};

class Article extends Model
{
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function votes()
    {
        return $this->morphMany('Vote', 'votable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
