<?php

namespace App\Enums\Railway\Engine;

enum EngineTechMarchEnum
{
    const NONE = "none";
    const PASSAGER = "passager";
    const MARCHANDISE = "marchandise";

    const default = self::NONE;
}
