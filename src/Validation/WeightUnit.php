<?php

namespace Cruzio\lib\Netbox\Validation;

trait WeightUnit
{

/* VALIDATE WEIGHT UNIT
----------------------------------------------------------------------------- */

    public static function validate_WeightUnit( string $input ) : true|string
    {
        $allowed = [ 'kg', 'g', 'lb', 'oz' ];

        if( !in_array( needle: $input, haystack: $allowed )) {
            $choices = implode( separator: ',', array: $allowed );
            return "Weight unit '$input' must be one of: $choices";
        }

        return true;
    }

}
