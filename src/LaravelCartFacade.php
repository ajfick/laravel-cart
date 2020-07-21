<?php

namespace Ajfick\LaravelCart;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajfick\LaravelCart\Skeleton\SkeletonClass
 */
class LaravelCartFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-cart';
    }
}
