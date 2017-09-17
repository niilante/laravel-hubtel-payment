<?php

/**
 * @package     OVAC/Laravel-Hubtel-Payment
 * @link        https://github.com/ovac/laravel-hubtel-payment
 *
 * @author      Ariama O. Victor (OVAC) <contact@ovac4u.com>
 * @link        http://ovac4u.com
 *
 * @license     https://github.com/ovac/laravel-hubtel-payment/blob/master/LICENSE
 * @copyright   (c) 2017, Rescope Inc
 */

namespace OVAC\LaravelHubtelPayment\Facades;

use Illuminate\Support\Facades\Facade;
use OVAC\HubtelPayment\Api\Transaction\SendMoney as Send;

class SendMoney extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Send::class;
    }
}