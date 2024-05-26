<?php

namespace Cruzio\lib\Netbox\Validation;

trait MacAddress
{
        
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_MacAddress( string $input ) : true|string
    {
        if( !filter_var( value: $input, filter: FILTER_VALIDATE_MAC )) {
            return "MacAddress '$input' is not valid.";
        }

        return true;
    }
}
