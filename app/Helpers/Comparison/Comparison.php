<?php

namespace App\Helpers\Comparison;
use Illuminate\Support\Facades\Facade;

/**
 * class Comparison
 * @package App\Helpers\Comparison
 * @method static bool has($id);
 * @method static Collection all();
 * @method static array get($id);
 * @method static Comparison put(array $value , Models $obj = null);
 */
class Comparison extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'comparison';
    }

}
