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
        'maps' => [
            'api-key' => env('GOOGLE_MAPS_API_KEY'),
        ],
    ],

    'ywhater' => [
        'base_uri' => env('WATHER_BASE_URI'),
        'app_id' => env('WHATER_APP_ID'),
        'consumer_key' => env('WHATER_CONSUMER_KEY'),
        'consumer_secret'=>env('WHATER_CONSUMER_SECRET')
        
    
    ],

];
