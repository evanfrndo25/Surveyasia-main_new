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

    // YouTube
    'youtube' => [
        'api_key'           => env('YOUTUBE_API_KEY'),
        'search_endpoint'   => env('YOUTUBE_SEARCH_ENDPOINT'),
        'channel_id'        => env('YOUTUBE_CHANNEL_ID'),
    ],

    // Socialite
    'google' => [
        'client_id' => '848250045653-io9nr64g73apl66m0lll42l5deeig36d.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback'
    ],

    'facebook' => [
        'client_id' => '189757589899123',
        'client_secret' => 'bd56c724cc77e7b9981d5eb4d68e8811',
        'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ],

    'linkedin' => [
        'client_id' => '86u9i8fcavi2uc',
        'client_secret' => 'FKNqCk63tBA22y0k',
        'redirect' => 'http://localhost:8000/auth/linkedin/callback'
    ],
];
