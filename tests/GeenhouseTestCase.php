<?php


namespace Krdinesh\Laravel\OAuth2\Greenhouse\Test;

use Orchestra\Testbench\TestCase;
use Krdinesh\Laravel\OAuth2\Greenhouse\Facades\Greenhouse;
use Krdinesh\Laravel\OAuth2\Greenhouse\GreenhouseServiceProvider;

class GreenhouseTestCase extends TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('greenhouse.clientId', 'XXXXXXXXX');
        $app['config']->set('greenhouse.clientSecret', 'XXXXXXXXXXX');
        $app['config']->set('greenhouse.redirectUri', 'XXXXXXXXXXXXXXXXXX');
    }
    protected function getPackageProviders($app)
    {
        return [
            GreenhouseServiceProvider::class,
        ];
    }
    protected function getPackageAliases($app)
    {
        return [
            'Greenhouse' => Greenhouse::class,
        ];
    }
}
