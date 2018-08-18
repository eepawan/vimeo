<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 18/8/18
 * Time: 12:08 PM
 */

namespace Pawan\Vimeo;

use Illuminate\Support\ServiceProvider;

class VimeoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'vimeo');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/assests' => public_path('vendor/vimeo')], 'public');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/vimeo')
        ]);
    }

    public function register()
    {

    }
}