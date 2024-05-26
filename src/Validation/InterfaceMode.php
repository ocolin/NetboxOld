<?php

namespace Cruzio\lib\Netbox\Validation;

trait InterfaceMode
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_InterfaceMode( string $input ) : true|string
    {
        $allowed = [ 'access', 'tagged', 'tagged-all' ];
        if( !in_array( $input, $allowed )) {
            $combine = implode( separator: ',', array: $allowed);
            return "Mode '$input' needs to be of: $combine.";
        }

        return true;
    }

}