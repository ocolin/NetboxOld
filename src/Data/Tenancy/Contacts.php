<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Tenancy;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;
use Cruzio\lib\Netbox\Validation;

class Contacts extends Data_Core implements DataInterface
{
    /**
     * @var int $group
     * ID of ContactGroups class
     */
    protected int $group;

    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    /**
     * @var string $title
     * Title of contact
     */
    protected string $title;

    /**
     * @var string $phone
     */
    protected string $phone;

    /**
     * @var string $email
     */
    protected string $email;

    /**
     * @var string $address
     */
    protected string $address;

    /**
     * @var string $link
     */
    protected string $link;

    /**
     * @var string $description
     */
    protected string $description;

    /**
     * @var string $comments
     */
    protected string $comments;

    /**
     * @var array<TagType> $tags
     */
    protected array  $tags;
    protected object $custom_fields;


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
        return [ 'name' ];
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
     * @return array<string, array<string|int>>
     */
    public static function validate() : array
    {
        return [
            'name'          => [ 'MaxString', 100 ],
            'title'         => [ 'MaxString', 100 ],
            'phone'         => [ 'MaxString', 50 ],
            'email'         => [ 'MaxString', 254 ],
            'address'       => [ 'MaxString', 200 ],
            'link'          => [ 'MaxString', 200 ],
            'description'   => [ 'MaxString', 200 ],
        ];
    }

    use Validation\Slug;
    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "group": 0,
  "name": "string",
  "title": "string",
  "phone": "string",
  "email": "user@example.com",
  "address": "string",
  "link": "string",
  "description": "string",
  "comments": "string",
  "tags": [
    {
      "name": "string",
      "slug": "s3Aw5bVZAGEG2IQdDuCnlJLrsfE4ZcBfe98OJpCf-Hzi2A2O-PFWUlbz",
      "color": "c29c4f"
    }
  ],
  "custom_fields": {
    "additionalProp1": "string",
    "additionalProp2": "string",
    "additionalProp3": "string"
  }
}
 */