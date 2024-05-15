<?php

namespace Cruzio\lib\Netbox\Validation;

trait FilterLogic
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_FilterLogic( string $input ) : true|string
    {
        $allowed = [ 'disabled', 'loose', 'exact' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "FilterLogic '$input' Needs to be of type: $combined.";
         }

        return true;
    }

}