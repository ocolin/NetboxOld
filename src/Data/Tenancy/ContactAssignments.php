<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Tenancy;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class ContactAssignments extends Data_Core implements DataInterface
{
    /**
     * @var string $content_type
     * REQUIRED
     */
    protected string $content_type;

    /**
     * @var int $object_id
     * REQUIRED
     */
    protected int $object_id;

    /**
     * @var int $role
     * ID for ContactRoles class
     */
    protected int $role;

    /**
     * @var int $contact
     * REQUIRED
     * ID of Contacts class
     */
    protected int $contact;

    /**
     * @var string $priority
     * ENUM
     */
    protected string $priority;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $object;
    

    /**
     * @var array<TagType> $tags
     */
    protected array  $tags;
    protected object $custom_fields;


/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'content_type', 'object_id', 'contact' ];
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
            'object'
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
            'priority'      => [ 'ContactPriority' ],
            'content_type'  => [ 'ContactContentTypes' ],
            'object_id'     => [ 'RangeInt', 0, 9223372036854775807 ],
        ];
    }

    use Validation\ContactPriority;
    use Validation\ContactContentTypes;
    use Validation\RangeInt;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "content_type": "string",
  "object_id": 9223372036854776000,
  "contact": 0,
  "role": 0,
  "priority": "primary",
  "tags": [
    {
      "name": "string",
      "slug": "5Py-KSdcTsKmKAZoNMD0f7KBsWp8stWBXbbjRjLm3NAq3FYgdIIUTHhopDn4K7ctVmcheKU0FY75",
      "color": "748644"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */