<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{Commentaire, Vote};
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }
   
    public function getScore()
    {
       $nbUp = DB::table('votes')
            ->where('vote', '=', 'upvote')
            ->where('votable_type', '=', 'Article')
            ->where('votable_id', "=", $this->id)
            ->count();
        $nbDown = DB::table('votes')
            ->where('vote', '=', 'downvote')
            ->where('votable_type', '=', 'Article')
            ->where('votable_id', "=", $this->id)
            ->count();
        return $nbUp - $nbDown;
    }

    
}
