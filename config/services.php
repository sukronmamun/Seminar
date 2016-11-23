<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '325492661169252',
        'client_secret' => 'd40b69b685760f19c15de7b8e45458e6',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '819609297506-9q0sv3ju8c15adc3c6mgvcfnn2trsj3f.apps.googleusercontent.com',
        'client_secret' => 'w1JiscRYQft3joDJ5jS0IRyc',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'twitter' => [
        'client_id' => 'VDYI3VABbHgbCWMtQ1iKsmYNV',
        'client_secret' => 'efZEHKuZ04fdLwlc3VdzkJ72UPjLGEWOnyQUQpTHwuIsUFOIXS',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],


];
