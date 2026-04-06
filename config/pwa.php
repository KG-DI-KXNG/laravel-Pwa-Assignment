<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Would you like the install button to appear on all pages?
      Set true/false
    |--------------------------------------------------------------------------
    */

    'install-button' => true,

    /*
    |--------------------------------------------------------------------------
    | PWA Manifest Configuration
    |--------------------------------------------------------------------------
    |  php artisan erag:update-manifest
    */

    'manifest' => [
        'name'             => env('APP_NAME', 'UCC IT PWA'),
        'short_name'       => 'UCC IT',
        'background_color' => '#0a1628',
        'display'          => 'standalone',
        'description'      => 'UCC IT Department – Faculty, Courses, Admissions & Social Media',
        'theme_color'      => '#0a1628',
        'icons'            => [
            [
                'src'     => '/icons/icon-72.png',
                'sizes'   => '72x72',
                'type'    => 'image/png',
            ],
            [
                'src'     => '/icons/icon-96.png',
                'sizes'   => '96x96',
                'type'    => 'image/png',
            ],
            [
                'src'     => '/icons/icon-128.png',
                'sizes'   => '128x128',
                'type'    => 'image/png',
            ],
            [
                'src'     => '/icons/icon-192.png',
                'sizes'   => '192x192',
                'type'    => 'image/png',
                'purpose' => 'any maskable',
            ],
            [
                'src'     => '/icons/icon-512.png',
                'sizes'   => '512x512',
                'type'    => 'image/png',
                'purpose' => 'any maskable',
            ],
        ],
        'name'             => env('APP_NAME', 'UCC IT PWA'),
        'short_name'       => 'UCC IT',
        'background_color' => '#0a1628',
        'display'          => 'standalone',
        'description'      => 'UCC IT Department – Faculty, Courses, Admissions & Social Media',
        'theme_color'      => '#0a1628',
        'icons'            => [
            [
                'src'     => '/icons/icon-72.png',
                'sizes'   => '72x72',
                'type'    => 'image/png',
            ],
            [
                'src'     => '/icons/icon-96.png',
                'sizes'   => '96x96',
                'type'    => 'image/png',
            ],
            [
                'src'     => '/icons/icon-128.png',
                'sizes'   => '128x128',
                'type'    => 'image/png',
            ],
            [
                'src'     => '/icons/icon-192.png',
                'sizes'   => '192x192',
                'type'    => 'image/png',
                'purpose' => 'any maskable',
            ],
            [
                'src'     => '/icons/icon-512.png',
                'sizes'   => '512x512',
                'type'    => 'image/png',
                'purpose' => 'any maskable',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug Configuration
    |--------------------------------------------------------------------------
    | Toggles the application's debug mode based on the environment variable
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Livewire Integration
    |--------------------------------------------------------------------------
    | Set to true if you're using Livewire in your application to enable
    | Livewire-specific PWA optimizations or features.
    */

    'livewire-app' => false,
];
