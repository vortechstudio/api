<?php

namespace App\Enums\Railway\Engine;

enum EngineTechMotorEnum
{
    const DIESEL = "diesel";
    const ELEC_1500 = "electrique 1500v";
    const ELEC_25 = "electrique 25Kv";
    const ELEC_DUAL = "electrique 1500v/25Kv";
    const HYBRIDE = "hybride";
    const VAPEUR = "vapeur";
}
