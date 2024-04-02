<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class PowerPortTemplates extends Params_Core implements ParamsInterface
{

    /**
     * @var int|array<int> $allocated_draw
     */
    protected int|array $allocated_draw;

    protected bool $allocated_draw__empty;

    /**
     * @var int|array<int> $allocated_draw__gt
     */
    protected int|array $allocated_draw__gt;

    /**
     * @var int|array<int> $allocated_draw__gte
     */
    protected int|array $allocated_draw__gte;

    /**
     * @var int|array<int> $allocated_draw__lt
     */
    protected int|array $allocated_draw__lt;

    /**
     * @var int|array<int> $allocated_draw__lte
     */
    protected int|array $allocated_draw__lte;

    /**
     * @var int|array<int> $allocated_draw__n
     */
    protected int|array $allocated_draw__n;

    /**
     * @var string|array<string> $created
     */
    protected string|array $created;

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

    /**
     * @var int|array<int> $maximum_draw
     */
    protected int|array $maximum_draw;
    protected bool $maximum_draw__empty;

    /**
     * @var int|array<int> $maximum_draw__gt
     */
    protected int|array $maximum_draw__gt;

    /**
     * @var int|array<int> $maximum_draw__gte
     */
    protected int|array $maximum_draw__gte;

    /**
     * @var int|array<int> $maximum_draw__lt
     */
    protected int|array $maximum_draw__lt;

    /**
     * @var int|array<int> $maximum_draw__lte
     */
    protected int|array $maximum_draw__lte;

    /**
     * @var int|array<int> $maximum_draw__n
     */
    protected int|array $maximum_draw__n;
    protected string $modified_by_request;

    /**
     * @var int|array<int> $moduletype_id
     */
    protected int|array $moduletype_id;

    /**
     * @var int|array<int> $moduletype_id__n
     */
    protected int|array $moduletype_id__n;

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
    protected string $type;
    protected string $type__n;
    protected string $updated_by_request;
}