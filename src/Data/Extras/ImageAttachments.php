<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class ImageAttachments extends Data_Core implements DataInterface
{
    /**
     * @var string $content_type
     */
    protected string $content_type;

    /**
     * @var int $object_id
     */
    protected int $object_id;

    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var string $image
     */
    protected string $image;

    /**
     * @var int $image_height
     */
    protected int $image_height;

    /**
     * @var int $image_width
     */
    protected int $image_width;

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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'content_type'  => [ 'CustomFieldObjectType' ],
            'image'         => [ 'MaxString', 100 ],
            'image_height'  => [ 'MaxInt', 32767 ],
            'image_width'   => [ 'MaxInt', 32767 ],
        ];
    }

    use Validation\CustomFieldObjectType;
    use Validation\MaxString;
    use Validation\MaxInt;
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