<?php

namespace Cruzio\lib\Netbox\Validation;

trait RackWidth
{

/* VALIDATE 
----------------------------------------------------------------------------- */

    public static function validate_RackWidth( int $input ) : true|string
    {
        $allowed = [ 10, 19, 21, 23 ];

        if(!in_array( $input, $allowed )) {
            $choices = implode( ',', $allowed );
            return "Wisth '$input' must be one of: $choices";
        }

        return true;
    }
}
