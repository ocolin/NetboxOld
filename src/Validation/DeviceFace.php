<?php

namespace Cruzio\lib\Netbox\Validation;

trait DeviceFace
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_DeviceFace( string $input ) : true|string
    {
        $allowed = [ 'front', 'rear' ];
        if( !in_array( $input, $allowed )) {
            $combine = implode( ',', $allowed );
            return "Face '{$input}' Must be: {$combine}";
        }

        return true;
    }

}