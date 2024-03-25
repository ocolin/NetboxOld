<?php

namespace Cruzio\lib\Netbox\Validation;

trait IpStatus
{

/*
----------------------------------------------------------------------------- */

    public static function validate_IpStatus( string $input ) : true|string
    {
        $allowed = [
            'active', 'reserved', 'deprecated', 'dhcp', 'slaac'
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "IpStatus '{$input}' must be of type: {$combined}.";
        }

        return true;
    }
}
