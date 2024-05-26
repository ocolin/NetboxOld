<?php

namespace Cruzio\lib\Netbox\Validation;

trait PowerSupply
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_PowerSupply( string $input ) : true|string
    {
        $allowed = [ 'ac', 'dc' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return  "Supply '$input' Needs to be: $combined";
        }

        return true;
    }
}
