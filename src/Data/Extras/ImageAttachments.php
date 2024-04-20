<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class ImageAttachments extends Data_Core implements DataInterface
{ 
    protected string $content_type;
    protected int    $object_id;
    protected string $name;
    protected string $image; // Max: 100
    protected int    $image_height; // Max: 32767
    protected int    $image_width; // Max: 32767


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $parent;



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'image' ];
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
            'data_path'
        ];
    }



/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [
            'content_type' => 'CustomFieldObjectType'
        ];
    }

    use Validation\CustomFieldObjectType;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/** 
{
  "content_type": "string",
  "object_id": 9223372036854776000,
  "name": "string",
  "image": "string",
  "image_height": 32767,
  "image_width": 32767
}
 */