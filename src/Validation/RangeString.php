<?php

namespace Cruzio\lib\Netbox\Validation;

trait RangeString
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_RangeString( string $input, int $min, int $max ): true|string
    {
        if( strlen( string: $input ) < $min OR strlen( string: $input ) > $max ) {
            return "String must be between $min and $max characters.";
        }

        return true;
    }
}