<?php

namespace FarseerLiu\Logger;

use Illuminate\Support\ServiceProvider;


class LoggerProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('logger', function ($app) {
            return new Logger();
        });
    }
}
