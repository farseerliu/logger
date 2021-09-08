<?php

namespace FarseerLiu\Logger;

use Illuminate\Support\ServiceProvider;


class LoggerProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/farseer_logger.php' => config_path('farseer_logger.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('logger', function ($app) {
            return new Logger();
        });
    }
}
