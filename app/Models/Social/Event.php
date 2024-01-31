<?php

namespace App\Models\Social;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    protected $casts = [
        'start_at' => 'timestamp',
        'end_at' => 'timestamp',
    ];

    public function cercles()
    {
        return $this->belongsToMany(Cercle::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'user_event', 'event_id', 'user_id');
    }

    public function poll()
    {
        return $this->hasOne(Poll::class);
    }
}
