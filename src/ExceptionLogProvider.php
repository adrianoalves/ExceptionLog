<?php
namespace ExceptionLog;
use Illuminate\Support\ServiceProvider;

class ExceptionLogProvider extends ServiceProvider
{
    /**
     * Bootstrap the migrarion file and the Exception Log configuration.
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom( __DIR__.'/migrations' );
        $this->publishes([
            __DIR__.'/config/exceptionlog.php' => config_path('exceptionlog.php' ),
        ], 'config' );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( 'exceptionlog', function() {
            return new ExceptionLog();
        });
    }

}
