<?php

namespace Cruzio\lib\Netbox\Validation;

trait PowerPhase
{
    
/*
----------------------------------------------------------------------------- */

    public static function validate_PowerPhase( string $input ) : true|string
    {
        $allowed = [ 'single-phase', 'three-phase' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return  "Phase '{$input}' Needs to be: {$combined}";
        }

        return true;
    }
}
