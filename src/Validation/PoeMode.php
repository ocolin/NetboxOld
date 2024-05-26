<?php

namespace Cruzio\lib\Netbox\Validation;

trait PoeMode
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_PoeMode( string $input ) : true|string
    {
        $allowed = [ 'pd', 'pse' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combine = implode( separator: ',', array: $allowed );
            return "PoeMode '$input' needs to be of: $combine.";
        }

        return true;
    }
}
