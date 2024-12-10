<?php

namespace Elijahcruz\LaravelSquare\Facades;

use Elijahcruz\LaravelSquare\SquareService;
use Illuminate\Support\Facades\Facade;

class Square extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SquareService::class;
    }
}
