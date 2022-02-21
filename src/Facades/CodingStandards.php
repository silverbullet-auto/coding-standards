<?php

namespace SilverBulletAuto\CodingStandards\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SilverBulletAuto\CodingStandards\CodingStandards
 */
class CodingStandards extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'silverbullet-coding-standards';
    }
}
