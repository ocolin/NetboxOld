<?php

namespace Cruzio\lib\Netbox\Validation;

trait MaxString
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_MaxString( string $input, int $length ): true|string
    {
        if( strlen( $input ) > $length ) {
            return "String cannot be more than $length characters.";
        }

        return true;
    }
}