<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Users;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class Groups extends Data_Core implements DataInterface
{
    /**
     * @var string $name
     * REQUIRED
     */
    protected string $name;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_update;
    protected int    $user_count;


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
            'user_count'
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
            'name' => [ 'MaxString', 100 ]
        ];
    }

    use Validation\MaxString;
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string"
}
 */