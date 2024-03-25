<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class DeviceRoles extends Data_Core implements DataInterface
{
    protected int $config_template;
    protected bool $vm_role;

    /**
     * @var array<TagType> $tags
     */
    
    protected array  $tags;
    protected object $custom_fields;
    protected string $name;
    protected string $slug;
    protected string $color;
    protected string $description;

    // READ ONLY
    protected int $id;
    protected int $device_count;
    protected int $virtualmachine_count;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'name', 'slug' ];
    }



/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [
            'status' => 'Status',
            'slug'   => 'Slug'
        ];
    }

    use Validation\Slug;

/*
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
            'device_count',
            'virtualmachine_count'
        ];
    }
}