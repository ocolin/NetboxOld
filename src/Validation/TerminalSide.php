<?php

namespace Cruzio\lib\Netbox\Validation;

trait TerminalSide
{
    
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_TerminalSide( string $input ) : true|string
    {
        $allowed = [ 'A', 'B' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "TerminalSide '$input' should be in: $combined";
        }

        return true;
    }
}