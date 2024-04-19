<?php

namespace Cruzio\lib\Netbox\Validation;

trait Duplex
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_Duplex( string $input ) : true|string
    {
        $allowed = [ 'half', 'full', 'auto' ];
        if( !in_array( $input, $allowed )) {
            $combine = implode( ',', $allowed );
            return "Duplex '{$input}' needs to be of: {$combine}.";
        }

        return true;
    }
}