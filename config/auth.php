<?php

return [

    /*
|--------------------------------------------------------------------------
| Authentication Defaults
|--------------------------------------------------------------------------
*/
    'defaults' => [ // what is this default means?
        'guard' => 'web', // the web value is refer to?
        'passwords' => 'users', // is this referring to users profiders? or users model? how it's linked with its class?
    ],

    /*
|--------------------------------------------------------------------------
| Authentication Guards
|--------------------------------------------------------------------------
*/
    'guards' => [ // what is this?
        'web' => [ // is this linked with " 'guard' => 'web' " above?
            'driver' => 'session', // which driver it is?
            'provider' => 'users', // where is users provider? i can't find it in config/app.php
        ],

        'api' => [ // what's the different with 'web' ?
            'driver' => 'token', // where is this driver?
            'provider' => 'users', // where is users provider? i can't find it in config/app.php
        ],
    ],

    /*
|--------------------------------------------------------------------------
| User Providers
|--------------------------------------------------------------------------
*/
    'providers' => [
        'users' => [
            'driver' => 'eloquent', // if i like to build my own driver here, what is the 'requirement' ?
            'model' => App\Models\Register::class, // if i like to build my own model here, what is the 'requirement' ?
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];