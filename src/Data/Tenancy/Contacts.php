<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Tenancy;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Types\TagType;

class Contacts extends Data_Core implements DataInterface
{
    protected int    $group; // Class: ContactGroups
    protected string $name; // Max: 100
    protected string $title; // Max: 100
    protected string $phone; // Max: 50
    protected string $email; // MAx: 254
    protected string $address; // Max: 200
    protected string $link; // Max: 200
    protected string $description; // Max: 200
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
}

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