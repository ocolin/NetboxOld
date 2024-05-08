<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Modules extends Params_Core implements ParamsInterface
{
    /**
     * @var string|array<string> $asset_tag
     */
    protected string|array $asset_tag;
    protected bool $asset_tag__empty;

    /**
     * @var string|array<string> $asset_tag__ic
     */
    protected string|array $asset_tag__ic;

    /**
     * @var string|array<string> $asset_tag__ie
     */
    protected string|array $asset_tag__ie;

    /**
     * @var string|array<string> $asset_tag__iew
     */
    protected string|array $asset_tag__iew;

    /**
     * @var string|array<string> $asset_tag__isw
     */
    protected string|array $asset_tag__isw;

    /**
     * @var string|array<string> $asset_tag__n
     */
    protected string|array $asset_tag__n;

    /**
     * @var string|array<string> $asset_tag__nic
     */
    protected string|array $asset_tag__nic;

    /**
     * @var string|array<string> $asset_tag__nie
     */
    protected string|array $asset_tag__nie;

    /**
     * @var string|array<string> $asset_tag__niew
     */
    protected string|array $asset_tag__niew;

    /**
     * @var string|array<string> $asset_tag__nisw
     */
    protected string|array $asset_tag__nisw;

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
     * @var int|array<int> $device_id
     */
    protected int|array $device_id;

    /**
     * @var int|array<int> $device_id__n
     */
    protected int|array $device_id__n;

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
     * @var string|array<string>
     */
    protected string|array $manufacturer;

    /**
     * @var string|array<string> $manufacturer__n
     */
    protected string|array $manufacturer__n;

    /**
     * @var string|array<string> $manufacturer_id
     */
    protected string|array $manufacturer_id;

    /**
     * @var string|array<string> $manufacturer_id__n
     */
    protected string|array $manufacturer_id__n;
    protected string $modified_by_request;

    /**
     * @var int|array<int> $module_bay_id
     */
    protected int|array $module_bay_id;

    /**
     * @var int|array<int> $module_bay_id__n
     */
    protected int|array $module_bay_id__n;

    /**
     * @var string|array<string> $module_type
     */
    protected string|array $module_type;

    /**
     * @var string|array<string> $module_type__n
     */
    protected string|array $module_type__n;

    /**
     * @var int|array<int> $module_type_id
     */
    protected int|array $module_type_id;

    /**
     * @var int|array<int> $module_type_id__n
     */
    protected int|array $module_type_id__n;
    protected int $offset;
    protected string $ordering;
    protected string $q;

    /**
     * @var string|array<string> $serial
     */
    protected string|array $serial;

    protected bool $serial__empty;

    /**
     * @var string|array<string> $serial__ic
     */
    protected string|array $serial__ic;

    /**
     * @var string|array<string> $serial__ie
     */
    protected string|array $serial__ie;

    /**
     * @var string|array<string> $serial__iew
     */
    protected string|array $serial__iew;

    /**
     * @var string|array<string> $serial__isw
     */
    protected string|array $serial__isw;

    /**
     * @var string|array<string> $serial__n
     */
    protected string|array $serial__n;

    /**
     * @var string|array<string> $serial__nic
     */
    protected string|array $serial__nic;

    /**
     * @var string|array<string> $serial__nie
     */
    protected string|array $serial__nie;

    /**
     * @var string|array<string> $serial__niew
     */
    protected string|array $serial__niew;

    /**
     * @var string|array<string> $serial__nisw
     */
    protected string|array $serial__nisw;

    /**
     * @var string|array<string> $status
     */
    protected string|array $status;

    /**
     * @var string|array<string> $status__n
     */
    protected string|array $status__n;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;
    protected string $updated_by_request; // UUIS
}