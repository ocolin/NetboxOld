<?php

namespace Cruzio\lib\Netbox\Validation;

trait UIEditable
{

/* VALIDATE UI EDITABLE
----------------------------------------------------------------------------- */

    public static function validate_UIEditable( string $input ) : true|string
    {
        $allowed = [ 'yes', 'no', 'hidden' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "UIEditable '$input' Needs to be of type: $combined.";
         }

        return true;
    }
}
