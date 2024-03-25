<?php

namespace Cruzio\lib\Netbox\Validation;

trait RfRole
{

/*
----------------------------------------------------------------------------- */

    public static function validate_RfRole( string $input ) : true|string
    {
        $allowed = [ 'ap', 'station' ];
        if( !in_array( $input, $allowed )) {
            $combine = implode( ',', $allowed );
            return "RfRol '{$input}' needs to be of: {$combine}.";
        }

        return true;
    }

}
