<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Tenancy;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Contacts extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $address
     */
    protected string|array $address;
    protected bool $address__empty;

        /**
         * @var string|array<string> $address__ic
         */
    protected string|array $address__ic;

        /**
         * @var string|array<string> $address__ie
         */
    protected string|array $address__ie;

        /**
         * @var string|array<string> $address__iew
         */
    protected string|array $address__iew;

        /**
         * @var string|array<string> $address__isw
         */
    protected string|array $address__isw;

        /**
         * @var string|array<string> $address__n
         */
    protected string|array $address__n;

        /**
         * @var string|array<string> $address__nic
         */
    protected string|array $address__nic;

        /**
         * @var string|array<string> $address__nie
         */
    protected string|array $address__nie;

        /**
         * @var string|array<string> $address__niew
         */
    protected string|array $address__niew;

        /**
         * @var string|array<string> $address__nisw
         */
    protected string|array $address__nisw;

    /**
     * @var int|array<int> $created
     */
    protected int|array $created;

    /**
     * @var string|array<string> $created__empty
     */
    protected string|array $created__empty;

    /**
     * @var string|array<string> $created__gt
     */
    protected string|array $created__gt;

    /**
     * @var string|array<string> $created__gte
     */
    protected string|array $created__gte;

    /**
     * @var string|array<string> $created__lt
     */
    protected string|array $created__lt;

    /**
     * @var string|array<string> $created__lte
     */
    protected string|array $created__lte;

    /**
     * @var string|array<string> $created__n
     */
    protected string|array $created__n;
    protected string $created_by_request;

    /**
     * @var string|array<string> $description
     */
    protected string|array $description;
    protected bool $description__empty;

    /**
     * @var string|array<string> $description__ic
     */
    protected string|array $description__ic;

    /**
     * @var string|array<string> $description__ie
     */
    protected string|array $description__ie;

    /**
     * @var string|array<string> $description__iew
     */
    protected string|array $description__iew;

    /**
     * @var string|array<string> $description__isw
     */
    protected string|array $description__isw;

    /**
     * @var string|array<string> $description__n
     */
    protected string|array $description__n;

    /**
     * @var string|array<string> $description__nic
     */
    protected string|array $description__nic;

    /**
     * @var string|array<string> $description__nie
     */
    protected string|array $description__nie;

    /**
     * @var string|array<string> $description__niew
     */
    protected string|array $description__niew;

    /**
     * @var string|array<string> $description__nisw
     */
    protected string|array $description__nisw;

    /**
     * @var string|array<string> $email
     */
    protected string|array $email;
    protected bool $email__empty;

    /**
     * @var string|array<string> $email__ic
     */
    protected string|array $email__ic;

    /**
     * @var string|array<string> $email__ie
     */
    protected string|array $email__ie;

    /**
     * @var string|array<string> $email__iew
     */
    protected string|array $email__iew;

    /**
     * @var string|array<string> $email__isw
     */
    protected string|array $email__isw;

    /**
     * @var string|array<string> $email__n
     */
    protected string|array $email__n;

    /**
     * @var string|array<string> $email__nic
     */
    protected string|array $email__nic;

    /**
     * @var string|array<string> $email__nie
     */
    protected string|array $email__nie;

    /**
     * @var string|array<string> $email__niew
     */
    protected string|array $email__niew;

    /**
     * @var string|array<string> $email__nisw
     */
    protected string|array $email__nisw;

    /**
     * @var int|array<int> $group
     */
    protected int|array $group;

    /**
     * @var int|array<int> $group__n
     */
    protected int|array $group__n;

    /**
     * @var int|array<int> $group_id
     */
    protected int|array $group_id;

    /**
     * @var int|array<int> $group_id__n
     */
    protected int|array $group_id__n;

    /**
     * @var int|array<int> $id
     */
    protected int|array $id;
    protected bool $id__empty;

    /**
     * @var int|array<int> $id__gt
     */
    protected int|array $id__gt;

    /**
     * @var int|array<int> $id__gte
     */
    protected int|array $id__gte;

    /**
     * @var int|array<int> $id__lt
     */
    protected int|array $id__lt;

    /**
     * @var int|array<int> $id__lte
     */
    protected int|array $id__lte;

    /**
     * @var int|array<int> $id__n
     */
    protected int|array $id__n;

    /**
     * @var string|array<string> $last_updated
     */
    protected string|array $last_updated;

    /**
     * @var string|array<string> $last_updated__empty
     */
    protected string|array $last_updated__empty;

    /**
     * @var string|array<string> $last_updated__gt
     */
    protected string|array $last_updated__gt;

    /**
     * @var string|array<string> $last_updated__gte
     */
    protected string|array $last_updated__gte;

    /**
     * @var string|array<string> $last_updated__lt
     */
    protected string|array $last_updated__lt;

    /**
     * @var string|array<string> $last_updated__lte
     */
    protected string|array $last_updated__lte;

    /**
     * @var string|array<string> $last_updated__n
     */
    protected string|array $last_updated__n;
    protected int $limit;

    /**
     * @var string|array<string> $link
     */
    protected string|array $link;
    protected bool $link__empty;

    /**
     * @var string|array<string> $link__ic
     */
    protected string|array $link__ic;

    /**
     * @var string|array<string> $link__ie
     */
    protected string|array $link__ie;

    /**
     * @var string|array<string> $link__iew
     */
    protected string|array $link__iew;

    /**
     * @var string|array<string> $link__isw
     */
    protected string|array $link__isw;

    /**
     * @var string|array<string> $link__n
     */
    protected string|array $link__n;

    /**
     * @var string|array<string> $link__nic
     */
    protected string|array $link__nic;

    /**
     * @var string|array<string> $link__nie
     */
    protected string|array $link__nie;

    /**
     * @var string|array<string> $link__niew
     */
    protected string|array $link__niew;

    /**
     * @var string|array<string> $link__nisw
     */
    protected string|array $link__nisw;
    protected string $modified_by_request;

    /**
     * @var string|array<string> $name
     */
    protected string|array $name;
    protected bool $name__empty;

    /**
     * @var string|array<string> $name__ic
     */
    protected string|array $name__ic;

    /**
     * @var string|array<string> $name__ie
     */
    protected string|array $name__ie;

    /**
     * @var string|array<string> $name__iew
     */
    protected string|array $name__iew;

    /**
     * @var string|array<string> $name__isw
     */
    protected string|array $name__isw;

    /**
     * @var string|array<string> $name__n
     */
    protected string|array $name__n;

    /**
     * @var string|array<string> $name__nic
     */
    protected string|array $name__nic;

    /**
     * @var string|array<string> $name__nie
     */
    protected string|array $name__nie;

    /**
     * @var string|array<string> $name__niew
     */
    protected string|array $name__niew;

    /**
     * @var string|array<string> $name__nisw
     */
    protected string|array $name__nisw;

    protected int $offset;
    protected string $ordering;

    /**
     * @var string|array<string> $phone
     */
    protected string|array $phone;
    protected bool $phone__empty;

    /**
     * @var string|array<string> $phone__ic
     */
    protected string|array $phone__ic;

    /**
     * @var string|array<string> $phone__ie
     */
    protected string|array $phone__ie;

    /**
     * @var string|array<string> $phone__iew
     */
    protected string|array $phone__iew;

    /**
     * @var string|array<string> $phone__isw
     */
    protected string|array $phone__isw;

    /**
     * @var string|array<string> $phone__n
     */
    protected string|array $phone__n;

    /**
     * @var string|array<string> $phone__nic
     */
    protected string|array $phone__nic;

    /**
     * @var string|array<string> $phone__nie
     */
    protected string|array $phone__nie;

    /**
     * @var string|array<string> $phone__niew
     */
    protected string|array $phone__niew;

    /**
     * @var string|array<string> $phone__nisw
     */
    protected string|array $phone__nisw;
    protected string $q;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;

    /**
     * @var string|array<string> $title
     */
    protected string|array $title;
    protected bool $title__empty;

    /**
     * @var string|array<string> $title__ic
     */
    protected string|array $title__ic;

    /**
     * @var string|array<string> $title__ie
     */
    protected string|array $title__ie;

    /**
     * @var string|array<string> $title__iew
     */
    protected string|array $title__iew;

    /**
     * @var string|array<string> $title__isw
     */
    protected string|array $title__isw;

    /**
     * @var string|array<string> $title__n
     */
    protected string|array $title__n;

    /**
     * @var string|array<string> $title__nic
     */
    protected string|array $title__nic;

    /**
     * @var string|array<string> $title__nie
     */
    protected string|array $title__nie;

    /**
     * @var string|array<string> $title__niew
     */
    protected string|array $title__niew;

    /**
     * @var string|array<string> $title__nisw
     */
    protected string|array $title__nisw;
    protected string $updated_by_request; // UUID
}