<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    public $timestamps = false;

    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function userArtists()
    {
        return $this->belongsToMany(Artist::class, 'user_artist');
    }

    public function userPlaylist()
    {
        return $this->belongsToMany(Playlist::class, 'user_playlist');
    }
}
