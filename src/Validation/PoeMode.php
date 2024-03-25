<?php

namespace Cruzio\lib\Netbox\Validation;

trait PoeMode
{

/*
----------------------------------------------------------------------------- */

    public static function validate_PoeMode( string $input ) : true|string
    {
        $allowed = [ 'pd', 'pse' ];
        if( !in_array( $input, $allowed )) {
            $combine = implode( ',', $allowed );
            return "PoeMode '{$input}' needs to be of: {$combine}.";
        }

        return true;
    }
}
