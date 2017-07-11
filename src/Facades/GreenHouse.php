<?php
/**
 * This file is part of the ramsey/laravel-oauth2-greenhouse library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Dinesh Kumar <kumardinesh0521@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://packagist.org/packages/krdinesh/laravel-oauth2-greenhouse Packagist
 * @link https://github.com/krdinesh/laravel-oauth2-greenhouse GitHub
 */
namespace Ramsey\Laravel\OAuth2\Greenhouse\Facades;

use Illuminate\Support\Facades\Facade;
use Krdinesh\OAuth2\Client\Provider\GreenHouse as KrDineshGreenHouse;
/**
 * Provides a static accessor to the GreenHouseServiceProvider through
 * a named alias in Laravel
 */
class GreenHouse extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return KrDineshGreenHouse::class;
    }
}