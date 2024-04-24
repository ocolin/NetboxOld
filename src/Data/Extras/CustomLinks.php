<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class CustomLinks extends Data_Core implements DataInterface
{ 
    /**
     * @var array<string> $content_types
     * REQUIRED
     * List of content types
     */
    protected array  $content_types;

    /**
     * @var string $name
     * REQUIRED
     * Name of link
     */
    protected string $name;

    /**
     * @var bool $enabled
     */
    protected bool $enabled;

    /**
     * @var string $link_text
     * REQUIRED
     * Jinja2 template code for link text
     */
    protected string $link_text;

    /**
     * @var string $link_url
     * REQUIRED
     * Jinja2 template code for link URL
     */
    protected string $link_url;

    /**
     * @var int $weight
     */
    protected int $weight;

    /**
     * @var string $group_name
     * Links with the same group will appear as a dropdown menu
     */
    protected string $group_name;

    /**
     * @var string $button_class
     * The class of the first link in a group will be used
     * for the dropdown button
     */
    protected string $button_class;

    /**
     * @var bool $new_window
     * Force link to open in a new window
     */
    protected bool $new_window;


    // READ ONLY
    protected int    $id;
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
        return [ 'content_types', 'name', 'link_text', 'link_url' ];
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
            'button_class'  => [ 'ButtonClass' ],
            'name'          => [ 'MaxString', 100 ],
            'weight'        => [ 'RangeInt', 0, 32767 ],
            'group_name'    => [ 'MaxString', 50 ],
        ];
    }

    use Validation\ButtonClass;
    use Validation\MaxString;
    use Validation\RangeInt;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "content_types": [
    "string"
  ],
  "name": "string",
  "enabled": true,
  "link_text": "string",
  "link_url": "string",
  "weight": 32767,
  "group_name": "string",
  "button_class": "outline-dark",
  "new_window": true
}
 */