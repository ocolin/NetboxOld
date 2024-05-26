<?php

namespace Cruzio\lib\Netbox\Validation;

trait IpRangeStatus
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_IpRangeStatus( string $input ) : true|string
    {
        $allowed = [ 'active', 'reserved', 'deprecated' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed);
            return "RangeStatus '$input' must be of type: $combined.";
        }

        return true;
    }
}
