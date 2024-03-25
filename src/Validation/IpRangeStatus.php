<?php

namespace Cruzio\lib\Netbox\Validation;

trait IpRangeStatus
{

/*
----------------------------------------------------------------------------- */

    public static function validate_IpRangeStatus( string $input ) : true|string
    {
        $allowed = [ 'active', 'reserved', 'deprecated' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "RangeStatus '{$input}' must be of type: {$combined}.";
        }

        return true;
    }
}
