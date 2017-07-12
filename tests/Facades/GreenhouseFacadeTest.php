<?php

namespace Krdinesh\Laravel\OAuth2\Greenhouse\Test\Facades;

use Krdinesh\Laravel\OAuth2\Greenhouse\Test\GreenhouseTestCase;
use Krdinesh\Laravel\OAuth2\Greenhouse\Facades\Greenhouse;
use Krdinesh\OAuth2\Client\Provider\GreenHouse as KrGreenhosue;

class GreenhouseFacadeTest extends GreenhouseTestCase {

    public function testGetFacadeAccessor(){
        $this->assertInstanceOf(KrGreenhosue::class, Greenhouse::getFacadeRoot());
    }
}