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


    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' =>env('GITHUB_CALLBACK') ,
    ],


    'facebook' => [
        'client_id' => '208031830341107',
        'client_secret' => '3ebe2c46ce17ff45af0418b62b7f41f1',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
      ], 


      'google' => [
        'client_id' => '340059452371-5c0i31m2otu7ugsbfjp4kapisqmkl59s.apps.googleusercontent.com',
        'client_secret' => 'ULzyIC_UX0GRW63W6fb0bMGG',
        'redirect' => 'http://localhost:8000/login/google/callback',
      ], 

];
