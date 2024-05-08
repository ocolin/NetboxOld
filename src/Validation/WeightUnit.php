<?php

namespace Cruzio\lib\Netbox\Validation;

trait WeightUnit
{

/* VALIDATE WEIGHT UNIT
----------------------------------------------------------------------------- */

    public static function validate_WeightUnit( string $input ) : true|string
    {
        $allowed = [ 'kg', 'g', 'lb', 'oz' ];

        if( !in_array( $input, $allowed )) {
            $choices = implode( ',', $allowed );
            return "Weight unit '{$input}' must be one of: {$choices}";
        }

        return true;
    }

}
