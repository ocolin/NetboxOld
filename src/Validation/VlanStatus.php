<?php

namespace Cruzio\lib\Netbox\Validation;

trait VlanStatus
{

/* VALIDATE VLAN STATUS
----------------------------------------------------------------------------- */

    public static function validate_VlanStatus( string $input ) : true|string
    {
        $allowed = [ 'active', 'reserved', 'deprecated' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "VlanStatus '$input' Needs to be of type: $combined.";
        }

        return true;
    }
}
