<?php

namespace Elijahcruz\LaravelSquare;

use Saloon\Http\Connector;

class SquareService extends Connector
{
    /**
     * Resolve the base URL for the request.
     */
    public function resolveBaseUrl(): string
    {
        return config('square.sandbox') ? 'https://connect.squareupsandbox.com/v2' : 'https://connect.squareup.com/v2';
    }

    public function defaultHeaders(): array
    {
        return [
            'SquareService-Version' => config('square.square_version'),
            'Authorization' => 'Bearer '.config('square.token'),
            'Content-Type' => 'application/json',
        ];
    }
}
