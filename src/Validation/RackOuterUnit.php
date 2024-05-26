<?php

namespace Cruzio\lib\Netbox\Validation;

trait RackOuterUnit
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_RackOuterUnit( string $input ) : true|string
    {
        $allowed = [ 'mm', 'in' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $choices = implode( separator: ',', array: $allowed );
            return "Outer unit '$input' must be one of: $choices";
        }

        return true;
    }
}
