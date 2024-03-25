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
     */
    protected array  $content_types;
    protected string $name;
    protected bool   $enabled;
    protected string $link_text; // Jinja2 template code for link text
    protected string $link_url; // Jinja2 template code for link URL
    protected int    $weight;
    protected string $group_name; // Links with the same group will appear as a dropdown menu
    protected string $button_class;
    protected bool   $new_window; // Force link to open in a new window


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $data_type;



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



/*
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [
            'button_class' => 'ButtonClass'
        ];
    }

    use Validation\ButtonClass;
}

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