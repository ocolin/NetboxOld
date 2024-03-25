<?php

namespace Cruzio\lib\Netbox\Validation;

trait MacAddress
{
        
/* 
----------------------------------------------------------------------------- */

    public static function validate_MacAddress( string $input ) : true|string
    {

        if( !filter_var( $input, FILTER_VALIDATE_MAC )) {
            return "MacAddress '{$input}' is not valid.";
        }

        return true;
    }
}
