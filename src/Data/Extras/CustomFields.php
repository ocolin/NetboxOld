<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class CustomFields extends Data_Core implements DataInterface
{ 
    /**
     * @var array<string> $content_types
     */
    protected array  $content_types;
    protected string $type;
    protected string $object_type;
    protected string $name; // Internal field name
    protected string $label; // Name of the field as displayed to users (if not provided, 'the field's name will be used)
    protected string $group_name; // Custom fields within the same group will be displayed together
    protected string $description; // Max: 200
    protected bool   $required;
    protected int    $search_weight;
    protected string $filter_logic;
    protected string $ui_visible;
    protected string $ui_editable;
    protected bool   $is_cloneable; // Replicate this value when cloning objects
    protected string $default; // efault value for the field (must be a JSON value). Encapsulate strings with double quotes (e.g. "Foo").
    protected int    $weight; // Fields with higher weights appear lower in a form.
    protected int    $validation_minimum; // Minimum allowed value (for numeric fields)
    protected int    $validation_maximum; // Maximum allowed value (for numeric fields)
    protected string $validation_regex; // Regular expression to enforce on text field values. Use ^ and $ to force matching of entire string. For example, <code>^[A-Z]{3}$</code> will limit values to exactly three uppercase letters.
    protected int    $choice_set; 


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
        return [ 'content_types', 'type', 'name' ];
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
 *  @return array<string, string> 
 */

    public static function validate() : array
    {
        return [
            'type'         => 'CustomFieldType',
            'object_type'  => 'CustomFieldObjectType',
            'filter_logic' => 'FilterLogic',
            'ui_visible'   => 'UIVisible',
            'ui_editable'  => 'UIEditable'
        ];
    }

    use Validation\CustomFieldType;
    use Validation\CustomFieldObjectType;
    use Validation\FilterLogic;
    use Validation\UIVisible;
    use Validation\UIEditable;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "content_types": [
    "string"
  ],
  "type": "text",
  "object_type": "string",
  "name": "3bxn7",
  "label": "string",
  "group_name": "string",
  "description": "string",
  "required": true,
  "search_weight": 32767,
  "filter_logic": "disabled",
  "ui_visible": "always",
  "ui_editable": "yes",
  "is_cloneable": true,
  "default": "string",
  "weight": 32767,
  "validation_minimum": 9223372036854776000,
  "validation_maximum": 9223372036854776000,
  "validation_regex": "string",
  "choice_set": 0
}
 */