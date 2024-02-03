<?php

namespace App\Enums\Railway\Config;

enum AdvantageCardClassEnum
{
    const THIRD = "third";
    const SECOND = "second";
    const FIRST = "first";
    const PREMIUM = "premium";
    const default = self::THIRD;
}
