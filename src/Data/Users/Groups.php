<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Users;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class Groups extends Data_Core implements DataInterface
{
    protected string $name;

    // READ ONLY
    protected int $id;
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
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "name": "string"
}
 */