<?php

use Saloon\Http\Connector;

class Square extends Connector
{

    /**
     * Resolve the base URL for the request.
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return config('square.sandbox') ? 'https://connect.squareupsandbox.com' : 'https://connect.squareup.com';
    }

    public function defaultHeaders(): array
    {
        return [
            "Square-Version" => config('square.square_version'),
            "Authorization" => "Bearer " . config('square.token'),
            "Content-Type" => "application/json",
        ];
    }
}