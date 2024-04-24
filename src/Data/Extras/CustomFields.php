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
     * REQUIRED
     */
    protected array  $content_types;

    /**
     * @var string $type
     * REQUIRED
     * Choose from list of field types
     */
    protected string $type;

    /**
     * @var string $object_type
     * Choose from list of object types
     */
    protected string $object_type;

    /**
     * @var string $name
     * REQUIRED
     * Internal field name
     */
    protected string $name;

    /**
     * @var string $label
     * Name of the field as displayed to users (if not provided,
     * 'the field's name will be used)
     */
    protected string $label;

    /**
     * @var string $group_name
     * Custom fields within the same group will be displayed together
     */
    protected string $group_name;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var bool $required
     * If true, this field is required when creating n
     * ew objects or editing an existing object.
     */
    protected bool $required;

    /**
     * @var int $search_weight
     * Weighting for search. Lower values are considered more
     * important. Fields with a search weight of zero will be ignored.
     */
    protected int $search_weight;

    /**
     * @var string $filter_logic
     * Choose disabled, loose, or exact
     */
    protected string $filter_logic;

    /**
     * @var string $ui_visible
     * Choose always, if-set, or hidden
     */
    protected string $ui_visible;

    /**
     * @var string $ui_editable
     * Choose yes, no, or hidden
     */
    protected string $ui_editable;

    /**
     * @var bool $is_cloneable
     * Replicate this value when cloning objects
     */
    protected bool $is_cloneable;

    /**
     * @var string $default
     * efault value for the field (must be a JSON value).
     * Encapsulate strings with double quotes (e.g. "Foo").
     */
    protected string $default;

    /**
     * @var int $weight
     * Fields with higher weights appear lower in a form.
     */
    protected int $weight;

    /**
     * @var int $validation_minimum
     * Minimum allowed value (for numeric fields)
     */
    protected int $validation_minimum;

    /**
     * @var int $validation_maximum
     * Maximum allowed value (for numeric fields)
     */
    protected int $validation_maximum;

    /**
     * @var string $validation_regex
     * Regular expression to enforce on text field values.
     * Use ^ and $ to force matching of entire string.
     * For example, <code>^[A-Z]{3}$</code> will limit
     * values to exactly three uppercase letters.
     */
    protected string $validation_regex;

    /**
     * @var int $choice_set
     * ID of Choice Set object
     */
    protected int $choice_set;


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
 *  @return array<string, array<string|int>>
 */

    public static function validate() : array
    {
        return [
            'type'               => [ 'CustomFieldType' ],
            'object_type'        => [ 'CustomFieldObjectType' ],
            'filter_logic'       => [ 'FilterLogic' ],
            'ui_visible'         => [ 'UIVisible' ],
            'ui_editable'        => [ 'UIEditable' ],
            'name'               => [ 'MaxString', 50 ],
            'label'              => [ 'MaxString', 50 ],
            'group_name'         => [ 'MaxString', 50 ],
            'description'        => [ 'MaxString', 200 ],
            'search_weight'      => [ 'RangeInt', 0, 32767 ],
            'weight'             => [ 'RangeInt', 0, 32767 ],
            'validation_minimum' => [ 'RangeInt', -9223372036854775808, 9223372036854775807 ],
            'validation_maximum' => [ 'RangeInt', -9223372036854775808, 9223372036854775807 ],
            'validation_regex'   => [ 'MaxString', 500 ],
        ];
    }

    use Validation\CustomFieldType;
    use Validation\CustomFieldObjectType;
    use Validation\FilterLogic;
    use Validation\UIVisible;
    use Validation\UIEditable;
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