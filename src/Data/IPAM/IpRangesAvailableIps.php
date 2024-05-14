<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\IPAM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;


class IpRangesAvailableIps extends Data_Core implements DataInterface
{
    protected int $range;

    /**
     * @var string $start_address
     * Starting IP address
     */
    protected string $start_address;

    /**
     * @var string $end_address
     * Ending IP Address
     */
    protected string $end_address;

    /**
     * @var int $vrf
     * ID of Vrfs class
     */
    protected int $vrf;

    /**
     * @var int $tenant
     * ID of Tenants class
     */
    protected int $tenant;

    /**
     * @var string $status
     * ENUM
     */
    protected string $status;

    /**
     * @var int $role
     * ID of Roles class
     */
    protected int $role;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;
    protected string $comments;

    /**
     * @var array<TagType>
     */
    protected array  $tags;
    protected object $custom_fields;


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $family;
    protected string $create;
    protected string $last_modified;
    protected int    $size;
    protected int    $children;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

    public static function required() : array
    {
        return [
            'range'
        ];
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
            'last_modified',
            'family',
            'size',
            'children'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'start_address' => ['CIDR'] ,
            'end_address'   => ['CIDR'],
            'status'        => ['IpRangeStatus'],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\CIDR;
    use Validation\IpRangeStatus;
    use Validation\MaxString;
}