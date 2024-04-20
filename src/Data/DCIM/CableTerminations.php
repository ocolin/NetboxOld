<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\DCIM;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class CableTerminations extends Data_Core implements DataInterface
{ 
    protected int    $cable; // Class: Cables
    protected string $cable_end;
    protected string $termination_type;
    protected int    $termination_id;

    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $termination;

    
/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

    public static function required() : array
    {
        return [ 'cable', 'cable_end', 'termination_type' ];
    }

    
/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

    public static function readonly() : array
    {
        return [
            'id',
            'url',
            'display',
            'created',
            'last_updated',
            'termination'
        ];
    }

    
/*  VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    public static function validate() : array
    {
        return [ 'termination_type' => 'TerminationType' ];
    }

    use Validation\TerminationType;

}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "cable": 0,
  "cable_end": "A",
  "termination_type": "string",
  "termination_id": 9223372036854776000
}
 */