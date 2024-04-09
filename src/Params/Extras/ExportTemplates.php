<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Extras;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class ExportTemplates extends Params_Core implements ParamsInterface
{

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
     * @var int|array<int> $data_file_id
     */
    protected int|array $data_file_id;

    /**
     * @var int|array<int> $data_file_id__n
     */
    protected int|array $data_file_id__n;

    /**
     * @var int|array<int> $data_source_id
     */
    protected int|array $data_source_id;

    /**
     * @var int|array<int> $data_source_id__n
     */
    protected int|array $data_source_id__n;

    /**
     * @var string|array<string> $data_synced
     */
    protected string|array $data_synced;
    protected bool $data_synced__empty;

    /**
     * @var string|array<string> $data_synced__gt
     */
    protected string|array $data_synced__gt;

    /**
     * @var string|array<string> $data_synced__gte
     */
    protected string|array $data_synced__gte;

    /**
     * @var string|array<string> $data_synced__lt
     */
    protected string|array $data_synced__lt;

    /**
     * @var string|array<string> $data_synced__lte
     */
    protected string|array $data_synced__lte;

    /**
     * @var string|array<string> $data_synced__n
     */
    protected string|array $data_synced__n;

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
     * @var int|array<int> $device_type_id
     */
    protected int|array $device_type_id;

    /**
     * @var int|array<int> $device_type_id__n
     */
    protected int|array $device_type_id__n;

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
}