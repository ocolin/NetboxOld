<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\IPAM;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Aggregates extends Params_Core implements ParamsInterface
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
     * @var string|array<string> $date_added
     */
    protected string|array $date_added;
    protected bool  $date_added__empty;

    /**
     * @var string|array<string> $date_added__gt
     */
    protected string|array $date_added__gt;

    /**
     * @var string|array<string> $date_added__gte
     */
    protected string|array $date_added__gte;

    /**
     * @var string|array<string> $date_added__lt
     */
    protected string|array $date_added__lt;

    /**
     * @var string|array<string> $date_added__lte
     */
    protected string|array $date_added__lte;

    /**
     * @var string|array<string> $date_added__n
     */
    protected string|array $date_added__n;

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
    protected int   $family;

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
    protected int    $offset;
    protected string $ordering;
    protected string $prefix;
    protected string $q;

    /**
     * @var string|array<string> $rir
     */
    protected string|array $rir;

    /**
     * @var string|array<string> $rir__n
     */
    protected string|array $rir__n;

    /**
     * @var string|array<string> $rir_id
     */
    protected string|array $rir_id;

    /**
     * @var string|array<string> $rir_id__n
     */
    protected string|array $rir_id__n;

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

/**
{
  "count": 123,
  "next": "http://api.example.org/accounts/?offset=400&limit=100",
  "previous": "http://api.example.org/accounts/?offset=200&limit=100",
  "results": [
    {
      "id": 0,
      "url": "string",
      "display": "string",
      "family": {
        "value": 4,
        "label": "IPv4"
      },
      "prefix": "string",
      "rir": {
        "id": 0,
        "url": "string",
        "display": "string",
        "name": "string",
        "slug": "L1rDni5iI_EZgaPFyj82kx_7R53OAfX8N_BeZoWoYFzFxibnVZICr_wDtvR46j-a-2"
      },
      "tenant": {
        "id": 0,
        "url": "string",
        "display": "string",
        "name": "string",
        "slug": "5ZpTREwkGyEzq_nMTtTYQSxQ"
      },
      "date_added": "2024-03-29",
      "description": "string",
      "comments": "string",
      "tags": [
        {
          "id": 0,
          "url": "string",
          "display": "string",
          "name": "string",
          "slug": "fqdlFbvFv-iTRvDusLeGjADx",
          "color": "0285ad"
        }
      ],
      "custom_fields": {
        "additionalProp1": "string",
        "additionalProp2": "string",
        "additionalProp3": "string"
      },
      "created": "2024-03-29T02:49:53.759Z",
      "last_updated": "2024-03-29T02:49:53.759Z"
    }
  ]
}
 */