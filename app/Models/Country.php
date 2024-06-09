<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['title'];

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function clubs()
    {
        return $this->hasManyThrough(Club::class, City::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class, 'country_id', 'id');
    }
}
