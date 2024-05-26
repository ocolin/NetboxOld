<?php

namespace Cruzio\lib\Netbox\Validation;

trait IpStatus
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_IpStatus( string $input ) : true|string
    {
        $allowed = [
            'active', 'reserved', 'deprecated', 'dhcp', 'slaac'
        ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "IpStatus '$input' must be of type: $combined.";
        }

        return true;
    }
}
