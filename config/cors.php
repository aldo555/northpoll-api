<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'api/poll', 'api/poll/*', 'api/option/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:8080', 'https://northpoll.xyz', 'https://northpoll.findaldo.dev'],

    'allowed_origins_patterns' => ['*'],

    'allowed_headers' => ['*'],

    'exposed_headers' => false,

    'max_age' => false,

    'supports_credentials' => false,

];
