<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\IMAP;

use Cruzio\lib\Netbox\Params\Params_Core;
use \Cruzio\lib\Netbox\Params\ParamsInterface;

class Aggregates extends Params_Core implements ParamsInterface
{

    /**
     * @var array<string> $created
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
    protected string $created_by_request; // UUID

    /**
     * @var array<string> $date_added__empty
     */
    protected array $date_added;
    protected bool  $date_added__empty;

    /**
     * @var array<string> $date_added__gt
     */
    protected array $date_added__gt;

    /**
     * @var array<string> $date_added__gte
     */
    protected array $date_added__gte;

    /**
     * @var array<string> $date_added__lt
     */
    protected array $date_added__lt;

    /**
     * @var array<string> $date_added__lte
     */
    protected array $date_added__lte;

    /**
     * @var array<string> $date_added__n
     */
    protected array $date_added__n;

    /**
     * @var array<string> $description
     */
    protected array $description;
    protected bool  $description__empty;

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
    protected int   $family;

    /**
     * @var array<int> $id
     */
    protected array $id;
    protected bool  $id__empty;

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
    protected array  $last_updated;

    /**
     * @var array<string> $last_updated__empty
     */
    protected array  $last_updated__empty;

    /**
     * @var array<string> $last_updated__gt
     */
    protected array  $last_updated__gt;

    /**
     * @var array<string> $last_updated__gte
     */
    protected array  $last_updated__gte;

    /**
     * @var array<string> $last_updated__lt
     */
    protected array  $last_updated__lt;

    /**
     * @var array<string> $last_updated__lte
     */
    protected array  $last_updated__lte;

    /**
     * @var array<string> $last_updated__n
     */
    protected array  $last_updated__n;
    protected int    $limit;
    protected string $modified_by_request; // UUID
    protected int    $offset;
    protected string $ordering;
    protected string $prefix;
    protected string $q;

    /**
     * @var array<string> $rir
     */
    protected array $rir;

    /**
     * @var array<string> $rir__n
     */
    protected array $rir__n;

    /**
     * @var array<string> $rir_id
     */
    protected array $rir_id;

    /**
     * @var array<string> $rir_id__n
     */
    protected array $rir_id__n;

    /**
     * @var array<string> $tag
     */
    protected array $tag;

    /**
     * @var array<string> $tag__n
     */
    protected array $tag__n;

    /**
     * @var array<string> $tenant
     */
    protected array  $tenant;

    /**
     * @var array<string> $tenant__n
     */
    protected array  $tenant__n;

    /**
     * @var array<int> $tenant_group
     */
    protected array  $tenant_group;

    /**
     * @var array<int> $tenant_group__n
     */
    protected array  $tenant_group__n;

    /**
     * @var array<int> $tenant_group_id
     */
    protected array  $tenant_group_id;

    /**
     * @var array<int> $tenant_group_id__n
     */
    protected array  $tenant_group_id__n;

    /**
     * @var array<int> $tenant_id
     */
    protected array  $tenant_id;

    /**
     * @var array<int> $tenant_id__n
     */
    protected array  $tenant_id__n;
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