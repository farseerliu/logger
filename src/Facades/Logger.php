<?php
namespace FarseerLiu\Logger\Facades;

use Illuminate\Support\Facades\Facade;

class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'logger';
    }
}
