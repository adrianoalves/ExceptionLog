<?php
namespace adrianoalves\ExceptionLog;
use Illuminate\Support\ServiceProvider;

class ExceptionLogProvider extends ServiceProvider
{
    /**
     * Bootstrap Services.
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
            __DIR__.'/config/exceptionlog.php' => config_path('exceptionlog.php' ),
        ], 'config' );
        /*if ($this->app->runningInConsole()) {
            $this->commands([
                LogCleanerUpper::class,
            ]);
        }*/
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
