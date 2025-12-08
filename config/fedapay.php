<?php

return [
    /*
    |--------------------------------------------------------------------------
    | FedaPay Environment
    |--------------------------------------------------------------------------
    |
    | Specify the environment you want to use.
    | Available values: 'live', 'sandbox'
    |
    */
    'environment' => env('FEDAPAY_ENVIRONMENT', 'sandbox'),
    
    /*
    |--------------------------------------------------------------------------
    | FedaPay API Keys
    |--------------------------------------------------------------------------
    |
    | Your FedaPay API keys. You can find them in your FedaPay dashboard.
    |
    */
    'api_key' => env('FEDAPAY_API_KEY'),
    'secret_key' => env('FEDAPAY_SECRET_KEY'),
    
    /*
    |--------------------------------------------------------------------------
    | FedaPay Token
    |--------------------------------------------------------------------------
    |
    | For tokenized payments (optional)
    |
    */
    'token' => env('FEDAPAY_TOKEN'),
    
    /*
    |--------------------------------------------------------------------------
    | FedaPay Account ID
    |--------------------------------------------------------------------------
    |
    | Your FedaPay account ID (optional)
    |
    */
    'account_id' => env('FEDAPAY_ACCOUNT_ID'),
    
    /*
    |--------------------------------------------------------------------------
    | API Base URLs
    |--------------------------------------------------------------------------
    |
    | Base URLs for FedaPay API
    |
    */
    'base_urls' => [
        'sandbox' => 'https://sandbox-api.fedapay.com/v1',
        'live' => 'https://api.fedapay.com/v1',
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Webhook Secret
    |--------------------------------------------------------------------------
    |
    | Webhook signing secret for verifying webhook signatures
    |
    */
    'webhook_secret' => env('FEDAPAY_WEBHOOK_SECRET'),
    
    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | Default currency for transactions
    |
    */
    'default_currency' => env('FEDAPAY_DEFAULT_CURRENCY', 'XOF'),
    
    /*
    |--------------------------------------------------------------------------
    | Timeout
    |--------------------------------------------------------------------------
    |
    | Request timeout in seconds
    |
    */
    'timeout' => env('FEDAPAY_TIMEOUT', 30),
    
    /*
    |--------------------------------------------------------------------------
    | Verify SSL
    |--------------------------------------------------------------------------
    |
    | Verify SSL certificate
    |
    */
    'verify_ssl' => env('FEDAPAY_VERIFY_SSL', true),
    
    /*
    |--------------------------------------------------------------------------
    | Logging
    |--------------------------------------------------------------------------
    |
    | Enable logging for debugging
    |
    */
    'logging' => [
        'enabled' => env('FEDAPAY_LOGGING_ENABLED', false),
        'level' => env('FEDAPAY_LOGGING_LEVEL', 'debug'),
    ],
];

