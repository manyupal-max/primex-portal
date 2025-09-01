<?php

return [

    'name' => env('APP_NAME', 'Laravel'),

    'env' => env('APP_ENV', 'production'),

    'debug' => (bool) env('APP_DEBUG', false),

    'url' => env('APP_URL', 'http://localhost'),

    'timezone' => 'UTC',

    'locale' => 'en',

    'fallback_locale' => 'en',

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    'providers' => [
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        // Add your custom providers here
    ],

    'aliases' => [
        'App' => Illuminate\Support\Facades\App::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'DB'   => Illuminate\Support\Facades\DB::class,
        'Route'=> Illuminate\Support\Facades\Route::class,
        // Add more as needed
    ],
];
