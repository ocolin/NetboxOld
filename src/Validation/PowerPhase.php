<?php

namespace Cruzio\lib\Netbox\Validation;

trait PowerPhase
{
    
/* VALIDATE 
----------------------------------------------------------------------------- */

    public static function validate_PowerPhase( string $input ) : true|string
    {
        $allowed = [ 'single-phase', 'three-phase' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return  "Phase '$input' Needs to be: $combined";
        }

        return true;
    }
}
