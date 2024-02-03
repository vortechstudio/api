<?php

namespace App\Enums\Railway\Engine;

enum EngineMoneyEnum
{
    const ARGENT = "argent";
    const TPOINT = "tpoint";
    const REEL = "reel";

    const default = self::ARGENT;
}
