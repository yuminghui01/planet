<?php
namespace Brian\Planet\Facades;
use Illuminate\Support\Facades\Facade;
class Planet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'planet';
    }
}
