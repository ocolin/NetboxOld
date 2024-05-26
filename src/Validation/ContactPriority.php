<?php

namespace Cruzio\lib\Netbox\Validation;

trait ContactPriority
{

/* VALIDATE CONTACT PRIORITY
----------------------------------------------------------------------------- */

    public static function validate_ContactPriority( string $input ) : true|string
    {
        $allowed = [ 'primary', 'secondary', 'tertiary', 'inactive' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ', ', array: $allowed );
            return "ContactPriority '$input' must be of type: $combined.";
        }

        return true;
    }

}