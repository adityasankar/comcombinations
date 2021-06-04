<?php

namespace Spcom404\Combinations;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spcom404\Combinations\Skeleton\SkeletonClass
 */
class CombinationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'combinations';
    }
}
