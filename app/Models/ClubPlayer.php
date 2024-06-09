<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubPlayer extends Model
{
    protected $table = 'club_player';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['club_id', 'player_id', 'join_date', 'left_date'];
}
