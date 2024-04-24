<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Circuits;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation\CircuitStatus;
use Cruzio\lib\Netbox\Validation\Date;
use Cruzio\lib\Netbox\Validation\MaxString;

class Circuits extends Data_Core implements DataInterface
{
    /**
     * @var string $cid
     * Unique circuit ID
     */
    protected string $cid;

    /**
     * @var int $provider
     * ID of Providers class
     */
    protected int $provider;

    /**
     * @var int $provider_account
     * ID of provider account class
     */
    protected int $provider_account;

    /**
     * @var int $type
     * ID of CircuitType class
     */
    protected int $type;

    /**
     * @var string $status
     */
    protected string $status;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $install_date
     * Date of install
     */
    protected string $install_date; // Date

    /**
     * @var string $termination_date
     * Date of termination
     */
    protected string $termination_date;

    /**
     * @var int $commit_rate
     * In Kbps
     */
    protected int $commit_rate;

    /**
     * @var string $description
     * Max: 20 char
     */
    protected string $description;

    /**
     * @var string $comments
     */
    protected string $comments;

    /**
     * @var array<TagType> $tags
     * Array of tag strings
     */
     protected array $tags;
     protected object $custom_fields;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected int    $termination_a; // Class: CircuitTerminations
    protected int    $termination_z; // Class: CircuitTerminations



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'cid', 'provider', 'type' ];
    }



/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function readonly() : array
    {
        return [
            'id',
            'url',
            'display',
            'created',
            'last_updated',
            'termination_a',
            'termination_z'
        ];
    }



/* VALIDATE
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'status'           => [ 'CircuitStatus' ] ,
            'install_date'     => [ 'Date' ],
            'termination_date' => [ 'Date' ],
            'cid'              => [ 'MaxString', 100 ],
            'commit_rate'      => [ 'MaxInt', 2147483647 ],
            'description'      => [ 'MaxString', 200 ]
        ];
    }

    use CircuitStatus;
    use Date;
    use MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "cid": "string",
  "provider": 0,
  "provider_account": 0,
  "type": 0,
  "status": "planned",
  "tenant": 0,
  "install_date": "2024-03-17",
  "termination_date": "2024-03-17",
  "commit_rate": 2147483647,
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "cCzkOdbWHXVdk7_ndQFil",
      "color": "dbd2d1"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */