<?php

namespace caherrera\MigrateCheck;

use Illuminate\Support\ServiceProvider;
use caherrera\MigrateCheck\Commands\MigrateCheckCommand;

class MigrateCheckServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            MigrateCheckCommand::class,
        ]);
    }
}
