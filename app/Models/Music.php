<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    /** @use HasFactory<\Database\Factories\MusicFactory> */
    use HasFactory;

    public $timestamps = false;

    protected function casts(): array
    {

        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime'
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function musicPlaylist()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_music');
    }
}
