<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Wireless;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class WirelessLans extends Params_Core implements ParamsInterface
{

    /**
     * @var string|array<string> $auth_cipher
     */
    protected string|array $auth_cipher;

    /**
     * @var string|array<string> $auth_cipher__n
     */
    protected string|array $auth_cipher__n;

    /**
     * @var string|array<string> $auth_psk
     */
    protected string|array $auth_psk;
    protected bool $auth_psk__empty;

    /**
     * @var string|array<string> $auth_psk__ic
     */
    protected string|array $auth_psk__ic;

    /**
     * @var string|array<string> $auth_psk__ie
     */
    protected string|array $auth_psk__ie;

    /**
     * @var string|array<string> $auth_psk__iew
     */
    protected string|array $auth_psk__iew;

    /**
     * @var string|array<string> $auth_psk__isw
     */
    protected string|array $auth_psk__isw;

    /**
     * @var string|array<string> $auth_psk__n
     */
    protected string|array $auth_psk__n;

    /**
     * @var string|array<string> $auth_psk__nic
     */
    protected string|array $auth_psk__nic;

    /**
     * @var string|array<string> $auth_psk__nie
     */
    protected string|array $auth_psk__nie;

    /**
     * @var string|array<string> $auth_psk__niew
     */
    protected string|array $auth_psk__niew;

    /**
     * @var string|array<string> $auth_psk__nisw
     */
    protected string|array $auth_psk__nisw;

    /**
     * @var string|array<string> $auth_type
     */
    protected string|array $auth_type;

    /**
     * @var string|array<string> $auth_type__n
     */
    protected string|array $auth_type__n;

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
    protected string $modified_by_request;
    protected int $offset;
    protected string $ordering;
    protected string $q;

    /**
     * @var string|array<string> $ssid
     */
    protected string|array $ssid;
    protected bool $ssid__empty;

    /**
     * @var string|array<string> $ssid__ic
     */
    protected string|array $ssid__ic;

    /**
     * @var string|array<string> $ssid__ie
     */
    protected string|array $ssid__ie;

    /**
     * @var string|array<string> $ssid__iew
     */
    protected string|array $ssid__iew;

    /**
     * @var string|array<string> $ssid__isw
     */
    protected string|array $ssid__isw;

    /**
     * @var string|array<string> $ssid__n
     */
    protected string|array $ssid__n;

    /**
     * @var string|array<string> $ssid__nic
     */
    protected string|array $ssid__nic;

    /**
     * @var string|array<string> $ssid__nie
     */
    protected string|array $ssid__nie;

    /**
     * @var string|array<string> $ssid__niew
     */
    protected string|array $ssid__niew;

    /**
     * @var string|array<string> $ssid__nisw
     */
    protected string|array $ssid__nisw;

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
    protected int|array $tenant_group;

    /**
     * @var int|array<int> $tenant_group__n
     */
    protected int|array $tenant_group__n;

    /**
     * @var int|array<int> $tenant_group_id
     */
    protected int|array $tenant_group_id;

    /**
     * @var int|array<int> $tenant_group_id__n
     */
    protected int|array $tenant_group_id__n;

    /**
     * @var int|array<int> $tenant_id
     */
    protected int|array $tenant_id;

    /**
     * @var int|array<int> $tenant_id__n
     */
    protected int|array $tenant_id__n;
    protected string $updated_by_request; // UUID

    /**
     * @var int|array<int> $vlan_id
     */
    protected int|array $vlan_id;

    /**
     * @var int|array<int> $vlan_id__n
     */
    protected int|array $vlan_id__n;
}