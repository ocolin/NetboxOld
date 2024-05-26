<?php

namespace Cruzio\lib\Netbox\Validation;

trait UIVisible
{

/* VALIDATE UIVISIBLE
----------------------------------------------------------------------------- */

    public static function validate_UIVisible( string $input ) : true|string
    {
        $allowed = [ 'always', 'if-set', 'hidden' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed);
            return "UIVisible '$input' Needs to be of type: $combined.";
         }

        return true;
    }

}
