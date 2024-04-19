<?php

namespace Cruzio\lib\Netbox\Validation;

trait UIEditable
{

/* VALIDATE UIEDITABLE
----------------------------------------------------------------------------- */

    public static function validate_UIEditable( string $input ) : true|string
    {
        $allowed = [ 'yes', 'no', 'hidden' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "UIEditable '{$input}' Needs to be of type: {$combined}.";
         }

        return true;
    }
}
