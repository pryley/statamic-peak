<?php

namespace Facades\Statamic\StarterKits;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\StarterKits\Exporter
 */
class Exporter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\StarterKits\Exporter';
    }
}
