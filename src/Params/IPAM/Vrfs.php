<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\IPAM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Vrfs extends Params_Core implements ParamsInterface
{
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
    protected string $created_by_request; // UUID

    /**
     * @var string|array<string> $description
     */
    protected string|array $description;
    protected bool  $description__empty;

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
     * @var string|array<string> $export_target
     */
    protected string|array $export_target;

    /**
     * @var string|array<string> $export_target__n
     */
    protected string|array $export_target__n;

    /**
     * @var int|array<int> $export_target_id
     */
    protected int|array $export_target_id;

    /**
     * @var int|array<int> $export_target_id__n
     */
    protected int|array $export_target_id__n;


    /**
     * @var int|array<int> $id
     */
    protected int|array $id;
    protected bool  $id__empty;

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
     * @var string|array<string> $import_target
     */
    protected string|array $import_target;

    /**
     * @var string|array<string> $import_target__n
     */
    protected string|array $import_target__n;

    /**
     * @var int|array<int> $import_target_id
     */
    protected int|array $import_target_id;

    /**
     * @var int|array<int> $import_target_id__n
     */
    protected int|array $import_target_id__n;

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
    protected int    $limit;
    protected string $modified_by_request; // UUID

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
     * @var string|array<string> $rd
     */
    protected string|array $rd;
    protected bool $rd__empty;

    /**
     * @var string|array<string> $rd__ic
     */
    protected string|array $rd__ic;

    /**
     * @var string|array<string> $rd__ie
     */
    protected string|array $rd__ie;

    /**
     * @var string|array<string> $rd__iew
     */
    protected string|array $rd__iew;

    /**
     * @var string|array<string> $rd__isw
     */
    protected string|array $rd__isw;

    /**
     * @var string|array<string> $rd__n
     */
    protected string|array $rd__n;

    /**
     * @var string|array<string> $rd__nic
     */
    protected string|array $rd__nic;

    /**
     * @var string|array<string> $rd__nie
     */
    protected string|array $rd__nie;

    /**
     * @var string|array<string> $rd__niew
     */
    protected string|array $rd__niew;

    /**
     * @var string|array<string> $rd__nisw
     */
    protected string|array $rd__nisw;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;

    /**
     * @var string|array<string> $tenant
     */
    protected string|array $tenant;

    /**
     * @var string|array<string> $tenant__n
     */
    protected string|array $tenant__n;

    /**
     * @var int|array<int> $tenant_group
     */
    protected int|array  $tenant_group;

    /**
     * @var int|array<int> $tenant_group__n
     */
    protected int|array  $tenant_group__n;

    /**
     * @var int|array<int> $tenant_group_id
     */
    protected int|array  $tenant_group_id;

    /**
     * @var int|array<int> $tenant_group_id__n
     */
    protected int|array  $tenant_group_id__n;

    /**
     * @var int|array<int> $tenant_id
     */
    protected int|array  $tenant_id;

    /**
     * @var int|array<int> $tenant_id__n
     */
    protected int|array  $tenant_id__n;
    protected string $updated_by_request; // UUID
}