<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;

    public $timestamps = false;

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function music()
    {
        return $this->hasMany(Music::class);
    }

    public function artistUsers()
    {
        return $this->belongsToMany(User::class, 'user_artist');
    }
}
