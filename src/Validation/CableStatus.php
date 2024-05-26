<?php

namespace Cruzio\lib\Netbox\Validation;

trait CableStatus
{

/*  VALIDATE CABLE STATUS
----------------------------------------------------------------------------- */

    public static function validate_CableStatus( string $input ) : true|string
    {
        $allowed = [ 'connected', 'planned', 'decommissioning' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "CableStatus '$input' Needs to be in: $combined";
        }

        return true;
    }

}