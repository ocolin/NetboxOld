<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Users;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Tokens extends Params_Core implements ParamsInterface
{

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
    protected string $expires; // Date-time
    protected string $expires__gte; // Date-time
    protected string $expires__lte; // Date-time


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
     * @var string|array<string> $key
     */
    protected string|array $key;
    protected bool $key__empty;

    /**
     * @var string|array<string> $key__ic
     */
    protected string|array $key__ic;

    /**
     * @var string|array<string> $key__ie
     */
    protected string|array $key__ie;

    /**
     * @var string|array<string> $key__iew
     */
    protected string|array $key__iew;

    /**
     * @var string|array<string> $key__isw
     */
    protected string|array $key__isw;

    /**
     * @var string|array<string> $key__n
     */
    protected string|array $key__n;

    /**
     * @var string|array<string> $key__nic
     */
    protected string|array $key__nic;

    /**
     * @var string|array<string> $key__nie
     */
    protected string|array $key__nie;

    /**
     * @var string|array<string> $key__niew
     */
    protected string|array $key__niew;

    /**
     * @var string|array<string> $key__nisw
     */
    protected string|array $key__nisw;
    protected int $limit;
    protected int $offset;
    protected string $ordering;
    protected string $q;

    /**
     * @var string|array<string> $user
     */
    protected string|array $user;

    /**
     * @var string|array<string> $user__n
     */
    protected string|array $user__n;

    /**
     * @var string|array<string> $user_id
     */
    protected string|array $user_id;

    /**
     * @var string|array<string> $user_id__n
     */
    protected string|array $user_id__n;
    protected bool $write_enabled;

}