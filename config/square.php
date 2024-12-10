<?php

return [
    /**
     * If true, the sandbox URL will be used.
     */
    'sandbox' => env('SQUARE_SANDBOX', true),

    'token' => env('SQUARE_TOKEN', 'your-token'),
    'application_id' => env('SQUARE_APPLICATION_ID', 'your-application-id'),
    'currency' => env('SQUARE_CURRENCY', 'USD'),

    /**
     * This updates the version of the Square API that is used.
     * When the package is updated, this value will be updated to the latest version.
     */
    'square_version' => env('SQUARE_VERSION', '2024-11-20'),
];