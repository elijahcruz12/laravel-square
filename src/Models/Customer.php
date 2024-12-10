<?php

namespace Elijahcruz\LaravelSquare\Models;

use Illuminate\Support\Carbon;

class Customer
{
    public ?string $id = null;

    public Carbon $created_at;

    public Carbon $updated_at;

    public ?string $given_name = null;

    public ?string $family_name = null;

    public ?string $email_address = null;

    public ?string $phone_number = null;

    public ?string $reference_id = null;

    public ?array $address = null;

    public ?Carbon $birthday = null;

    public ?string $note = null;

    public ?string $company_name = null;

    public ?string $nickname = null;

    public ?array $preferences = null;

    public ?int $version = null;

    public ?array $tax_ids = null;

    public ?array $group_ids = null;

    public ?array $segment_ids = null;

    public ?string $creation_source = null;

    public function __construct(
        ?string $id = null,
        ?Carbon|string $created_at = null,
        ?Carbon|string $updated_at = null,
        ?string $given_name = null,
        ?string $family_name = null,
        ?string $email_address = null,
        ?string $phone_number = null,
        ?string $reference_id = null,
        ?array $address = null,
        ?Carbon|string $birthday = null,
        ?string $note = null,
        ?string $company_name = null,
        ?string $nickname = null,
        ?array $preferences = null,
        ?int $version = null,
        ?array $tax_ids = null,
        ?array $group_ids = null,
        ?array $segment_ids = null,
        ?string $creation_source = null
    ) {
        $this->id = $id;

        if ($created_at instanceof Carbon) {
            $this->created_at = $created_at;
        } elseif ($created_at !== null) {
            $this->created_at = Carbon::parse($created_at);
        } else {
            $this->created_at = now();
        }

        if ($updated_at instanceof Carbon) {
            $this->updated_at = $updated_at;
        } elseif ($updated_at !== null) {
            $this->updated_at = Carbon::parse($updated_at);
        } else {
            $this->updated_at = now();
        }

        if ($birthday instanceof Carbon) {
            $this->birthday = $birthday;
        } elseif ($birthday !== null) {
            $this->birthday = Carbon::parse($birthday);
        } else {
            $this->birthday = null;
        }

        $this->given_name = $given_name;
        $this->family_name = $family_name;
        $this->email_address = $email_address;
        $this->phone_number = $phone_number;
        $this->reference_id = $reference_id;
        $this->address = $address;
        $this->note = $note;
        $this->company_name = $company_name;
        $this->nickname = $nickname;
        $this->preferences = $preferences;

        $this->version = $version;
        $this->tax_ids = $tax_ids;
        $this->group_ids = $group_ids;
        $this->segment_ids = $segment_ids;
        $this->creation_source = $creation_source;
    }
}
