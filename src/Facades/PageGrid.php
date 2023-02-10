<?php

namespace AstroStore\PageGrid\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AstroStore\PageGrid\PageGrid
 */
class PageGrid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AstroStore\PageGrid\PageGrid::class;
    }
}
