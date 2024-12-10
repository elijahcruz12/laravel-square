<?php

namespace Elijahcruz\LaravelSquare\Contracts;

use LogicException;
use Saloon\Http\Request;

abstract class PaginatedRequest extends Request
{
    protected string $pagination_item;

    public function getPaginatedItemKey(): string
    {
        if (! isset($this->pagination_item)) {
            throw new LogicException('Your request is missing a pagination item key. You must add a pagination_item property like [protected string $pagination_item = "customers"]');
        }

        return $this->pagination_item;
    }
}
