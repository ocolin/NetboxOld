<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Extras;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class ImageAttachments extends Params_Core implements ParamsInterface
{
    protected string $content_type;

    /**
     * @var int|array<int> $content_type_id
     */
    protected int|array $content_type_id;

    /**
     * @var int|array<int> $content_type_id__empty
     */
    protected int|array $content_type_id__empty;

    /**
     * @var int|array<int> $content_type_id__gt
     */
    protected int|array $content_type_id__gt;

    /**
     * @var int|array<int> $content_type_id__gte
     */
    protected int|array $content_type_id__gte;

    /**
     * @var int|array<int> $content_type_id__lt
     */
    protected int|array $content_type_id__lt;

    /**
     * @var int|array<int> $content_type_id__lte
     */
    protected int|array $content_type_id__lte;

    /**
     * @var int|array<int> $content_type_id__n
     */
    protected int|array $content_type_id__n;

    protected string $created;

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

    /**
     * @var int|array<int> $object_id
     */
    protected int|array $object_id;
    protected bool $object_id__empty;

    /**
     * @var int|array<int> $object_id__gt
     */
    protected int|array $object_id__gt;

    /**
     * @var int|array<int> $object_id__gte
     */
    protected int|array $object_id__gte;

    /**
     * @var int|array<int> $object_id__lt
     */
    protected int|array $object_id__lt;

    /**
     * @var int|array<int> $object_id__lte
     */
    protected int|array $object_id__lte;

    /**
     * @var int|array<int> $object_id__n
     */
    protected int|array $object_id__n;
    protected int $offset;
    protected string $ordering;
    protected string $q;
}