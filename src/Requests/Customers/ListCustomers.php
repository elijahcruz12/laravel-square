<?php

namespace Elijahcruz\LaravelSquare\Requests\Customers;

use Elijahcruz\LaravelSquare\Responses\PaginatedResponse;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Plugins\AcceptsJson;

class ListCustomers extends Request
{
    use AcceptsJson;

    protected Method $method = Method::GET;

    protected ?string $response = PaginatedResponse::class;

    protected int $limit = 100;

    protected ?string $sort_field = null;

    protected ?string $sort_order = null;

    protected ?bool $count = null;

    protected ?string $cursor = null;

    protected string $pagination_item = 'customers';

    public function __construct(?int $limit = null, ?string $sort_field = null, ?string $sort_order = null, ?bool $count = null, ?string $cursor = null)
    {
        $this->limit = $limit ?? $this->limit;
        $this->sort_field = $sort_field ?? $this->sort_field;
        $this->sort_order = $sort_order ?? $this->sort_order;
        $this->count = $count ?? $this->count;
        $this->cursor = $cursor ?? $this->cursor;
    }

    public function resolveEndpoint(): string
    {
        return '/customers';
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'sort_field' => $this->sort_field,
            'sort_order' => $this->sort_order,
            'count' => $this->count,
            'cursor' => $this->cursor,
        ]);
    }
}
