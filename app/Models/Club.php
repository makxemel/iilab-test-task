<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'clubs';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['name', 'short_name', 'foundation_year', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'club_player', 'club_id', 'player_id');
    }

    public function gamesLikeClub1()
    {
        return $this->hasMany(Game::class, 'club1_id', 'id');
    }

    public function gamesLikeClub2()
    {
        return $this->hasMany(Game::class, 'club2_id', 'id');
    }

    public function games()
    {
        return $this->gamesLikeClub1()->union($this->gamesLikeClub2()->toBase());
    }
}
