<?php

namespace Cruzio\lib\Netbox\Validation;

trait CableStatus
{

/* 
----------------------------------------------------------------------------- */

    public static function validate_CableStatus( string $input ) : true|string
    {
        $allowed = [ 'connected', 'planned', 'decommissioning' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "CableStatus '{$input}' Needs to be in: {$combined}";
        }

        return true;
    }

}