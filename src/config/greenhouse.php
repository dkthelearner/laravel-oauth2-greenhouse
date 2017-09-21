<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GreenHouser Client Details
    |--------------------------------------------------------------------------
    |
    | When you run `artisan vendor:publish`, this config file will be copied
    | to `config/greenhouse.php`.
    |
    | Please register your application as an GreenHouse Client here:
    | https://developers.greenhouse.io/candidate-ingestion.html#authentication
    |
    |
    | After registering, either update the values directly in
    | `config/greenhouse.php` or add them as the following environment
    | variables to your local `.env` file.
    |
    | * GREENHOUSE_CLIENT_ID
    | * GREENHOUSE_CLIENT_SECRET
    | * GREENHOUSE_REDIRECT_URI
    |
    */
    'clientId' => env('GREENHOUSE_CLIENT_ID'),
    'clientSecret' => env('GREENHOUSE_CLIENT_SECRET'),
    'redirectUri' => env('GREENHOUSE_REDIRECT_URI'),
];