<?php

namespace App\Models\Railway\Gare;

use App\Enums\Railway\Gare\GareTypeEnum;
use Illuminate\Database\Eloquent\Model;

class RailwayGare extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    protected $casts = [
        "type" => GareTypeEnum::class,
    ];

    public function weather()
    {
        return $this->hasOne(RailwayGareWeather::class);
    }

    public function hub()
    {
        return $this->hasOne(RailwayHub::class);
    }
}
