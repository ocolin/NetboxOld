<?php

namespace Cruzio\lib\Netbox\Validation;

trait VlanStatus
{

/* VALIDATE VLAN STATUS
----------------------------------------------------------------------------- */

    public static function validate_VlanStatus( string $input ) : true|string
    {
        $allowed = [ 'active', 'reserved', 'deprecated' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "VlanStatus '{$input}' Needs to be of type: {$combined}.";
        }

        return true;
    }
}
