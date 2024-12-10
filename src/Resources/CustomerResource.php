<?php

namespace Elijahcruz\LaravelSquare\Resources;

use Saloon\Http\Connector;

class CustomerResource
{
    public function __construct(
        public Connector $connector
    ) {}


}
