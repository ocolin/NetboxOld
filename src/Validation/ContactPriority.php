<?php

namespace Cruzio\lib\Netbox\Validation;

trait ContactPriority
{

/* VALIDATE CONTACT PRIORITY
----------------------------------------------------------------------------- */

    public static function validate_ContactPriority( string $input ) : true|string
    {
        $allowed = [ 'primary', 'secondary', 'tertiary', 'inactive' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "ContactPriority '{$input}' must be of type: {$combined}.";
        }

        return true;
    }

}