<?php

namespace Cruzio\lib\Netbox\Validation;

trait PrefixStatus
{
    
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_PrefixStatus( string $input ) : true|string
    {
        $allowed = [
            'container',
            'active',
            'reserved',
            'deprecated'
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "PrefixStatus '{$input}' Needs to be of type {$combined}.";
        }

        return true;
    }    
}
