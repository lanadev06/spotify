<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /** @use HasFactory<\Database\Factories\SubscriptionFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public $timestamps = false;

    protected function casts(): array
    {
       return [
           'starts_at' => 'datetime',
           'ends_at' => 'datetime',
       ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
