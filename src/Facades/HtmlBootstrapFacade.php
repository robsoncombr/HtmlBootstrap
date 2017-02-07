<?php

namespace Codi\HtmlBootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class HtmlBootstrapFacade extends Facade
{
    /**
     * The name of the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'HtmlBootstrap';
    }
}