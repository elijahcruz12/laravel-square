<?php

namespace Elijahcruz\LaravelSquare\Responses;

use Elijahcruz\LaravelSquare\Contracts\PaginatedRequest;
use Elijahcruz\LaravelSquare\Models\Customer;
use Illuminate\Support\Collection;
use Saloon\Http\Response;

class PaginatedResponse extends Response
{
    public function nextResponse(): Response
    {
        return $this->pendingRequest->getConnector()->send($this->nextRequest());
    }

    private function nextRequest()
    {
        if ($this->hasNext()) {
            $request = $this->pendingRequest->getRequest();
            $request->query()->set('cursor', $this->json()['cursor']);

            return $request;
        }
    }

    private function hasNext(): bool
    {
        try {
            return array_key_exists('cursor', $this->json());
        } catch (\JsonException $e) {
            return false;
        }
    }

    public function getItems(): Collection
    {
        /**
         * @var PaginatedRequest $request
         */
        $request = $this->pendingRequest->getRequest();
        $array = $this->json()[$request->getPaginatedItemKey()];

        // We need to make sure there's items to return
        if (empty($array)) {
            return new Collection;
        }

        $collection = collect();

        foreach ($array as $customer) {
            $collection->push(new Customer(
                $customer['id'] ?? null,
                $customer['created_at'] ?? null,
                $customer['updated_at'] ?? null,
                $customer['given_name'] ?? null,
                $customer['family_name'] ?? null,
                $customer['email_address'] ?? null,
                $customer['phone_number'] ?? null,
                $customer['reference_id'] ?? null,
                $customer['address'] ?? null,
                $customer['birthday'] ?? null,
                $customer['note'] ?? null,
                $customer['company_name'] ?? null,
                $customer['nickname'] ?? null,
                $customer['preferences'] ?? null,
                $customer['version'] ?? null,
                $customer['tax_ids'] ?? null,
                $customer['group_ids'] ?? null,
                $customer['segment_ids'] ?? null,
                $customer['creation_source'] ?? null
            ));
        }

        return $collection;
    }
}
