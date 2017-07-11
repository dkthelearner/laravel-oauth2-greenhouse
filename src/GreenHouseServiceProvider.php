<?php

/**
 * This file is part of the krdinesh/laravel-oauth2-greenhouse library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Dinesh Kumar <kumardinesh0521@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://packagist.org/packages/krdinesh/laravel-oauth2-greenhouse Packagist
 * @link https://github.com/krdinesh/laravel-oauth2-greenhouse GitHub
 */
namespace Krdinesh\Laravel\OAuth2\GreenHouse;

use Illuminate\Support\ServiceProvider;
use Krdinesh\OAuth2\Client\Provider\GreenHouse as KrDineshGreenHouse;
/**
 * The GreenHouseServiceProvider provides easy access to league/oauth2-greenhouse
 * for use with Laravel
 */
class GreenHouseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/greenhouse.php' => config_path('greenhouse.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KrDineshGreenHouse::class, function ($app) {
            return new KrDineshGreenHouse([
                'clientId' => config('greenhouse.clientId'),
                'clientSecret' => config('greenhouse.clientSecret'),
                'redirectUri' => config('greenhouse.redirectUri'),
            ]);
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            KrDineshGreenHouse::class
        ];
    }
}