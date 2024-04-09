<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Circuits;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class CircuitTypes extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $color
     */
    protected string|array $color;
    protected bool $color__empty;

    /**
     * @var string|array<string> $color__ic
     */
    protected string|array $color__ic;

    /**
     * @var string|array<string> $color__ie
     */
    protected string|array $color__ie;

    /**
     * @var string|array<string> $color__iew
     */
    protected string|array $color__iew;

    /**
     * @var string|array<string> $color__isw
     */
    protected string|array $color__isw;

    /**
     * @var string|array<string> $color__n
     */
    protected string|array $color__n;

    /**
     * @var string|array<string> $color__nic
     */
    protected string|array $color__nic;

    /**
     * @var string|array<string> $color__nie
     */
    protected string|array $color__nie;

    /**
     * @var string|array<string> $color__niew
     */
    protected string|array $color__niew;

    /**
     * @var string|array<string> $color__nisw
     */
    protected string|array $color__nisw;

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
    protected string $q;

    /**
     * @var string|array<string> $slug
     */
    protected string|array $slug;
    protected bool $slug__empty;

    /**
     * @var string|array<string> $slug__ic
     */
    protected string|array $slug__ic;

    /**
     * @var string|array<string> $slug__ie
     */
    protected string|array $slug__ie;

    /**
     * @var string|array<string> $slug__iew
     */
    protected string|array $slug__iew;

    /**
     * @var string|array<string> $slug__isw
     */
    protected string|array $slug__isw;

    /**
     * @var string|array<string> $slug__n
     */
    protected string|array $slug__n;

    /**
     * @var string|array<string> $slug__nic
     */
    protected string|array $slug__nic;

    /**
     * @var string|array<string> $slug__nie
     */
    protected string|array $slug__nie;

    /**
     * @var string|array<string> $slug__niew
     */
    protected string|array $slug__niew;

    /**
     * @var string|array<string> $slug__nisw
     */
    protected string|array $slug__nisw;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;
    protected string $updated_by_request;
}