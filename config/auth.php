<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'api',
        'passwords' => 'buyers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'buyer' => [
            'driver' => 'session',
            'provider' => 'buyers',
        ],

        'manufacturer' => [
            'driver' => 'session',
            'provider' => 'manufacturers',
        ],

        'fast_food_grocery' => [
            'driver' => 'session',
            'provider' => 'fast_food_groceries',
        ],

        'networking_agent' => [
            'driver' => 'session',
            'provider' => 'networking_agents',
        ],

        'professional' => [
            'driver' => 'session',
            'provider' => 'professionals',
        ],

        'seller' => [
            'driver' => 'session',
            'provider' => 'sellers',
        ],

        'shopper' => [
            'driver' => 'session',
            'provider' => 'shoppers',
        ],
        
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [

        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        'buyers' => [
            'driver' => 'eloquent',
            'model' => App\Buyer::class,
        ],

        'sellers' => [
            'driver' => 'eloquent',
            'model' => App\Seller::class,
        ],

        'manufacturers' => [
            'driver' => 'eloquent',
            'model' => App\Manufacturer::class,
        ],

        'fast_food_groceries' => [
            'driver' => 'eloquent',
            'model' => App\FastFoodGrocery::class,
        ],

        'networking_agents' => [
            'driver' => 'eloquent',
            'model' => App\NetworkingAgent::class,
        ],

        'professionals' => [
            'driver' => 'eloquent',
            'model' => App\Professional::class,
        ],

        'shoppers' => [
            'driver' => 'eloquent',
            'model' => App\Shopper::class,
        ],
        
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'buyers' => [
            'provider' => 'buyers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'sellers' => [
            'provider' => 'sellers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'manufacturers' => [
            'provider' => 'manufacturers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'networking_agents' => [
            'provider' => 'networking_agents',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'professionals' => [
            'provider' => 'professionals',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'shoppers' => [
            'provider' => 'shoppers',
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
