<?php

namespace Elijahcruz\LaravelSquare\Resources;

use Elijahcruz\LaravelSquare\Requests\Customers\ListCustomers;
use Saloon\Http\Connector;

class CustomerResource
{
    public function __construct(
        protected Connector $connector
    ) {}

    public function list(?int $limit = null, ?string $sort_field = null, ?string $sort_order = null, ?bool $count = null, ?string $cursor = null)
    {
        return $this->connector->send(new ListCustomers(
            $limit,
            $sort_field,
            $sort_order,
            $count,
            $cursor
        ));
    }
}
