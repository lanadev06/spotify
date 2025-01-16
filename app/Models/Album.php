<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /** @use HasFactory<\Database\Factories\AlbumFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function artists()
    {
        return $this->belongsTo(Artist::class);
    }

    public function music()
    {
        return $this->hasMany(Music::class);
    }
}
