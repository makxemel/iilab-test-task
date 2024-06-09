<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['title'];

    public function player()
    {
        return $this->hasMany(Player::class, 'position_id', 'id');
    }
}
