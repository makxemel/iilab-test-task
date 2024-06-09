<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class City extends Model
{
    protected $table = 'cities';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['title'];

    public function clubs()
    {
        return $this->hasMany(Club::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
