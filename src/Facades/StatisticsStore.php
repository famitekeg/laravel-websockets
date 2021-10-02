<?php

namespace Famitekeg\LaravelWebSockets\Facades;

use Famitekeg\LaravelWebSockets\Contracts\StatisticsStore as StatisticsStoreInterface;
use Illuminate\Support\Facades\Facade;

class StatisticsStore extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return StatisticsStoreInterface::class;
    }
}
