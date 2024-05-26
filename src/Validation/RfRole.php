<?php

namespace Cruzio\lib\Netbox\Validation;

trait RfRole
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_RfRole( string $input ) : true|string
    {
        $allowed = [ 'ap', 'station' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combine = implode( separator: ',', array: $allowed );
            return "RfRol '$input' needs to be of: $combine.";
        }

        return true;
    }

}
