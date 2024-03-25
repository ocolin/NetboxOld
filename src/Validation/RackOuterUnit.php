<?php

namespace Cruzio\lib\Netbox\Validation;

trait RackOuterUnit
{

/*
----------------------------------------------------------------------------- */

    public static function validate_RackOuterUnit( string $input ) : true|string
    {
        $allowed = [ 'mm', 'in' ];
        if( !in_array( $input, $allowed )) {
            $choices = implode( ',', $allowed );
            return "Outer unit '{$input}' must be one of: {$choices}";
        }

        return true;
    }
}
