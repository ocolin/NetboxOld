<?php

namespace Cruzio\lib\Netbox\Validation;

trait Duplex
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_Duplex( string $input ) : true|string
    {
        $allowed = [ 'half', 'full', 'auto' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combine = implode( separator: ',', array: $allowed );
            return "Duplex '$input' needs to be of: $combine.";
        }

        return true;
    }
}