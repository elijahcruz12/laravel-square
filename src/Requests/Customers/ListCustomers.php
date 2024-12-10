<?php

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Plugins\AcceptsJson;

class ListCustomers extends Request
{
    use AcceptsJson;

    protected Method $method = Method::GET;

    protected int $limit = 100;

    protected ?string $sort_field = null;

    protected ?string $sort_order = null;

    protected ?bool $count = null;

    public function __construct(?int $limit = null, ?string $sort_field = null, ?string $sort_order = null, ?bool $count = null)
    {
        $this->limit = $limit ?? $this->limit;
        $this->sort_field = $sort_field ?? $this->sort_field;
        $this->sort_order = $sort_order ?? $this->sort_order;
        $this->count = $count ?? $this->count;
    }

    public function resolveEndpoint(): string
    {
        return "/customers";
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'sort_field' => $this->sort_field,
            'sort_order' => $this->sort_order,
            'count' => $this->count,
        ]);
    }
}