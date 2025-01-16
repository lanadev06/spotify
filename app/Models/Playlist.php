<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    /** @use HasFactory<\Database\Factories\PlaylistFactory> */
    use HasFactory;

    public $timestamps = false;

    public function playlistMusic()
    {
        return $this->belongsToMany(Music::class, 'playlist_music');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function playlistUser()
    {
        return $this->belongsToMany(User::class, 'user_playlist');
    }
}
