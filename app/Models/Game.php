<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = ['club1_score', 'club2_score', 'club1_id', 'club2_id'];

    public function club1()
    {
        return $this->belongsTo(Club::class, 'club1_id', 'id');
    }

    public function club2()
    {
        return $this->belongsTo(Club::class, 'club2_id', 'id');
    }

    public function goals()
    {
        return $this->hasMany(Goal::class, 'game_id', 'id');
    }
}
