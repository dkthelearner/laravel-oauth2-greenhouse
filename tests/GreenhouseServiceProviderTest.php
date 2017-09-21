<?php

namespace Krdinesh\Laravel\OAuth2\Greenhouse\Test;

use Krdinesh\Laravel\OAuth2\Greenhouse\Test\GreenhouseTestCase;
use Krdinesh\OAuth2\Client\Provider\GreenHouse as KrGreenhouse;

class GreenhouseServiceProviderTest extends GreenhouseTestCase {

    public function testRegister(){
        $this->assertInstanceOf(KrGreenhouse::class,$this->app[KrGreenhouse::class]);
    }
}

