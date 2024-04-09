<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Extras;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class CustomFields extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $choice_set
     */
    protected string|array $choice_set;

    /**
     * @var string|array<string> $choice_set__n
     */
    protected string|array $choice_set__n;

    /**
     * @var int|array<int> $choice_set_id
     */
    protected int|array $choice_set_id;

    /**
     * @var int|array<int> $choice_set_id__n
     */
    protected int|array $choice_set_id__n;

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
    protected string $content_types;
    protected string $content_types__ic;
    protected string $content_types__ie;
    protected string $content_types__iew;
    protected string $content_types__isw;
    protected string $content_types__n;
    protected string $content_types__nic;
    protected string $content_types__nie;
    protected string $content_types__niew;
    protected string $content_types__nisw;

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
    protected string $filter_logic;
    protected string $filter_logic__n;

    /**
     * @var string|array<string> $group_name
     */
    protected string|array $group_name;
    protected bool $group_name__empty;

    /**
     * @var string|array<string> $group_name__ic
     */
    protected string|array $group_name__ic;

    /**
     * @var string|array<string> $group_name__ie
     */
    protected string|array $group_name__ie;

    /**
     * @var string|array<string> $group_name__iew
     */
    protected string|array $group_name__iew;

    /**
     * @var string|array<string> $group_name__isw
     */
    protected string|array $group_name__isw;

    /**
     * @var string|array<string> $group_name__n
     */
    protected string|array $group_name__n;

    /**
     * @var string|array<string> $group_name__nic
     */
    protected string|array $group_name__nic;

    /**
     * @var string|array<string> $group_name__nie
     */
    protected string|array $group_name__nie;

    /**
     * @var string|array<string> $group_name__niew
     */
    protected string|array $group_name__niew;

    /**
     * @var string|array<string> $group_name__nisw
     */
    protected string|array $group_name__nisw;

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
    protected int $offset;
    protected string $ordering;
    protected string $q;
    protected bool $required;

    /**
     * @var int|array<int>
     */
    protected int|array $search_weight;
    protected bool $search_weight__empty;

    /**
     * @var int|array<int> $search_weight__gt
     */
    protected int|array $search_weight__gt;

    /**
     * @var int|array<int> $search_weight__gte
     */
    protected int|array $search_weight__gte;

    /**
     * @var int|array<int> $search_weight__lt
     */
    protected int|array $search_weight__lt;

    /**
     * @var int|array<int> $search_weight__lte
     */
    protected int|array $search_weight__lte;

    /**
     * @var int|array<int> $search_weight__n
     */
    protected int|array $search_weight__n;

    /**
     * @var string|array<string> $type
     */
    protected string|array $type;

    /**
     * @var string|array<string> $type__n
     */
    protected string|array $type__n;
    protected string $ui_editable;
    protected string $ui_editable__n;
    protected string $ui_visible;
    protected string $ui_visible__n;

    /**
     * @var int|float|array<int|float> $weight
     */
    protected int|float|array $weight;
    protected bool $weight__empty;


    /**
     * @var int|float|array<int|float> $weight__gt
     */
    protected int|float|array $weight__gt;

    /**
     * @var int|float|array<int|float> $weight__gte
     */
    protected int|float|array $weight__gte;

    /**
     * @var int|float|array<int|float> $weight__lt
     */
    protected int|float|array $weight__lt;

    /**
     * @var int|float|array<int|float> $weight__lte
     */
    protected int|float|array $weight__lte;

    /**
     * @var int|float|array<int|float> $weight__n
     */
    protected int|float|array $weight__n;

}