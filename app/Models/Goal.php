<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'goals';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['player_id', 'game_id', 'time'];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id', 'id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }
}
