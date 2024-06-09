<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $hidden = ['middle_name', 'created_at', 'updated_at'];

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'birth_date', 'photo', 'position', 'club_id', 'country_id'];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
