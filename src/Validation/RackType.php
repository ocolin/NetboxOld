<?php

namespace Cruzio\lib\Netbox\Validation;

trait RackType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_RackType( string $input ) : true|string
    {
        $allowed = [
            '2-post-frame',
            '4-post-frame',
            '4-post-cabinet',
            'wall-frame',
            'wall-frame-vertical',
            'wall-cabinet',
            'wall-cabinet-vertical'
        ];

        if( !in_array( $input, $allowed )) {
            return "Type '{$input}' is not a valid rack type.";
        }

        return true;
    }
}
