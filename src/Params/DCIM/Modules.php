<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\DCIM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Modules extends Params_Core implements ParamsInterface
{
    /**
     * @var array<string> $asset_tag
     */
    protected array $asset_tag;
    protected bool $asset_tag__empty;

    /**
     * @var array<string> $asset_tag__ic
     */
    protected array $asset_tag__ic;

    /**
     * @var array<string> $asset_tag__ie
     */
    protected array $asset_tag__ie;

    /**
     * @var array<string> $asset_tag__iew
     */
    protected array $asset_tag__iew;

    /**
     * @var array<string> $asset_tag__isw
     */
    protected array $asset_tag__isw;

    /**
     * @var array<string> $asset_tag__n
     */
    protected array $asset_tag__n;

    /**
     * @var array<string> $asset_tag__nic
     */
    protected array $asset_tag__nic;

    /**
     * @var array<string> $asset_tag__nie
     */
    protected array $asset_tag__nie;

    /**
     * @var array<string> $asset_tag__niew
     */
    protected array $asset_tag__niew;

    /**
     * @var array<string> $asset_tag__nisw
     */
    protected array $asset_tag__nisw;

    /**
     * @var array<int> $created
     */
    protected array $created;

    /**
     * @var array<string> $created__empty
     */
    protected array $created__empty;

    /**
     * @var array<string> $created__gt
     */
    protected array $created__gt;

    /**
     * @var array<string> $created__gte
     */
    protected array $created__gte;

    /**
     * @var array<string> $created__lt
     */
    protected array $created__lt;

    /**
     * @var array<string> $created__lte
     */
    protected array $created__lte;

    /**
     * @var array<string> $created__n
     */
    protected array $created__n;
    protected string $created_by_request;

    /**
     * @var array<string> $description
     */
    protected array $description;
    protected bool $description__empty;

    /**
     * @var array<string> $description__ic
     */
    protected array $description__ic;

    /**
     * @var array<string> $description__ie
     */
    protected array $description__ie;

    /**
     * @var array<string> $description__iew
     */
    protected array $description__iew;

    /**
     * @var array<string> $description__isw
     */
    protected array $description__isw;

    /**
     * @var array<string> $description__n
     */
    protected array $description__n;

    /**
     * @var array<string> $description__nic
     */
    protected array $description__nic;

    /**
     * @var array<string> $description__nie
     */
    protected array $description__nie;

    /**
     * @var array<string> $description__niew
     */
    protected array $description__niew;

    /**
     * @var array<string> $description__nisw
     */
    protected array $description__nisw;

    /**
     * @var array<int> $device_id
     */
    protected array $device_id;

    /**
     * @var array<int> $device_id__n
     */
    protected array $device_id__n;

    /**
     * @var array<int> $id
     */
    protected array $id;
    protected bool $id__empty;

    /**
     * @var array<int> $id__gt
     */
    protected array $id__gt;

    /**
     * @var array<int> $id__gte
     */
    protected array $id__gte;

    /**
     * @var array<int> $id__lt
     */
    protected array $id__lt;

    /**
     * @var array<int> $id__lte
     */
    protected array $id__lte;

    /**
     * @var array<int> $id__n
     */
    protected array $id__n;

    /**
     * @var array<string> $last_updated
     */
    protected array $last_updated;
    protected array $last_updated__empty;

    /**
     * @var array<string> $last_updated__gt
     */
    protected array $last_updated__gt;

    /**
     * @var array<string> $last_updated__gte
     */
    protected array $last_updated__gte;

    /**
     * @var array<string> $last_updated__lt
     */
    protected array $last_updated__lt;

    /**
     * @var array<string> $last_updated__lte
     */
    protected array $last_updated__lte;

    /**
     * @var array<string> $last_updated__n
     */
    protected array $last_updated__n;
    protected int $limit;

    /**
     * @var array<string>
     */
    protected array $manufacturer;

    /**
     * @var array<string> $manufacturer__n
     */
    protected array $manufacturer__n;

    /**
     * @var array<string> $manufacturer_id
     */
    protected array $manufacturer_id;

    /**
     * @var array<string> $manufacturer_id__n
     */
    protected array $manufacturer_id__n;
    protected string $modified_by_request;

    /**
     * @var array<int> $module_bay_id
     */
    protected array $module_bay_id;

    /**
     * @var array<int> $module_bay_id__n
     */
    protected array $module_bay_id__n;

    /**
     * @var array<string> $module_type
     */
    protected array $module_type;

    /**
     * @var array<string> $module_type__n
     */
    protected array $module_type__n;

    /**
     * @var array<int> $module_type_id
     */
    protected array $module_type_id;

    /**
     * @var array<int> $module_type_id__n
     */
    protected array $module_type_id__n;
    protected int $offset;
    protected string $ordering;
    protected string $q;

    /**
     * @var array<string> $serial__empty
     */
    protected array $serial;

    protected bool $serial__empty;

    /**
     * @var array<string> $serial__ic
     */
    protected array $serial__ic;

    /**
     * @var array<string> $serial__ie
     */
    protected array $serial__ie;

    /**
     * @var array<string> $serial__iew
     */
    protected array $serial__iew;

    /**
     * @var array<string> $serial__isw
     */
    protected array $serial__isw;

    /**
     * @var array<string> $serial__n
     */
    protected array $serial__n;

    /**
     * @var array<string> $serial__nic
     */
    protected array $serial__nic;

    /**
     * @var array<string> $serial__nie
     */
    protected array $serial__nie;

    /**
     * @var array<string> $serial__niew
     */
    protected array $serial__niew;

    /**
     * @var array<string> $serial__nisw
     */
    protected array $serial__nisw;

    /**
     * @var array<string> $status
     */
    protected array $status;

    /**
     * @var array<string> $status__n
     */
    protected array $status__n;

    /**
     * @var array<string> $tag
     */
    protected array $tag;

    /**
     * @var array<string> $tag__n
     */
    protected array $tag__n;
    protected string $updated_by_request; // UUIS
}