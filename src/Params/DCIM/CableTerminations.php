<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class CableTerminations extends Params_Core implements ParamsInterface
{
    protected int $cable;
    protected int $cable__n;
    protected string $cable_end;
    protected string $cable_end__n;

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

    protected int $limit;
    protected int $offset;
    protected string $ordering;

    /**
     * @var int|array<int> $termination_id
     */
    protected int|array $termination_id;
    protected bool $termination_id__empty;

    /**
     * @var int|array<int> $termination_id__gt
     */
    protected int|array $termination_id__gt;

    /**
     * @var int|array<int> $termination_id__gte
     */
    protected int|array $termination_id__gte;

    /**
     * @var int|array<int> $termination_id__lt
     */
    protected int|array $termination_id__lt;

    /**
     * @var int|array<int> $termination_id__lte
     */
    protected int|array $termination_id__lte;

    /**
     * @var int|array<int> $termination_id__n
     */
    protected int|array $termination_id__n;
    protected string $termination_type;
    protected string $termination_type__n;
}