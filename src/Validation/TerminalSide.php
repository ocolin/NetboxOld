<?php

namespace Cruzio\lib\Netbox\Validation;

trait TerminalSide
{
    
/* 
----------------------------------------------------------------------------- */

    public static function validate_TerminalSide( string $input ) : true|string
    {
        $allowed = [ 'A', 'B' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "TerminalSide '{$input}' should be in: {$combined}";
        }

        return true;
    }
}