<?php

namespace Cruzio\lib\Netbox\Validation;

trait RackWidth
{

/* VALIDATE 
----------------------------------------------------------------------------- */

    public static function validate_RackWidth( int $input ) : true|string
    {
        $allowed = [ 10, 19, 21, 23 ];

        if(!in_array( needle: $input, haystack: $allowed )) {
            $choices = implode( separator: ',', array: $allowed );
            return "Width '$input' must be one of: $choices";
        }

        return true;
    }
}
