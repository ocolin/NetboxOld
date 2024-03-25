<?php

namespace Cruzio\lib\Netbox\Validation;

trait PowerSupply
{

/*
----------------------------------------------------------------------------- */

    public static function validate_PowerSupply( string $input ) : true|string
    {
        $allowed = [ 'ac', 'dc' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return  "Supply '{$input}' Needs to be: {$combined}";
        }

        return true;
    }
}
