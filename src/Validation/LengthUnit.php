<?php

namespace Cruzio\lib\Netbox\Validation;

trait LengthUnit
{
    
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_LengthUnit( string $input ) : true|string
    {
        $allowed = [
            'km', 'm', 'cm', 'mi', 'ft', 'in'
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "LengthUnit '{$input}' must be of: {$combined}";
        }

        return true;
    }
}
