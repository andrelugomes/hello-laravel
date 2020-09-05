<?php

namespace Andrelugomes\Calculate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Calculate
 * @package Andrelugomes\Calculate\Facades
 *
 * Documentation to expose methods by IDE
 *
 * @method static mixed add(int $value)
 * @method static mixed subtract(int $value)
 * @method static int getResult()
 */
class Calculate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'calculate';
    }
}
