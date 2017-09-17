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

return [

    /*
    |--------------------------------------------------------------------------
    | Hubtel Account Number
    |--------------------------------------------------------------------------
    |
    | This is the merchant account number. This is required to identify your
    | account and can be found in your Hubtel Merchant Account Dashboard
    | Navigate to  https://unity.hubtel.com/merchantaccount/dashboard
    | and replace 'null' with your account number from the account
    |
    | Example: HM2707170000
     */

    'account_number' => env('HUBTEL_ACCONUT_NUMBER', null),

    /*
    |--------------------------------------------------------------------------
    | Hubtel Client (ID/Secret)
    |--------------------------------------------------------------------------
    |
    | Hubtel Payment Requires a valid ClientID and ClientSecret obtained from
    | an active Hubtel Account. The Client ID and Secret can be obtained
    | at https://unity.hubtel.com/account/api-accounts.
     */

    'client' => [

        /**
         * Define this variable in your .env file or replace the 'null'
         * with your Hubtel Merchannt Client ID
         */

        'id' => env('HUBTEL_CLIENT_ID', null),
        /**
         * Define this variable in your .env file or replace the 'null'
         * with your Hubtel Merchannt Client Secret
         */
        'secret' => env('HUBTEL_CLIENT_SECRET', null),
    ],
];