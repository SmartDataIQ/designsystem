<?php

namespace Smartdataiq\Designsystem\Facades;

use Illuminate\Support\Facades\Facade;

class DesignSystemServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DesignSystem';
    }
}