<?php

namespace App\Enums\Railway\Gare;

enum GareTypeEnum
{
    const HALTE = "halte";
    const SMALL = "small";
    const MEDIUM = "medium";
    const LARGE = "large";
    const TERMINUS = "terminus";
    const default = self::SMALL;
}
