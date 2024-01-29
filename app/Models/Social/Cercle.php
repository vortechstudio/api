<?php

namespace App\Models\Social;

use Illuminate\Database\Eloquent\Model;

class Cercle extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
