<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '646341810620-g9tunha4nfqdprf1vov351isc2a5ghqu.apps.googleusercontent.com',
        'client_secret' => '2hJVW58AXdnblPCae7RLhDHw',
        'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],

    'facebook' => [
        'client_id' => '853052698942420',
        'client_secret' => '9b8c9a5cfb5e9387a4606a35407c2057',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

];
