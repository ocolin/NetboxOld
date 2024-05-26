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
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "PrefixStatus '$input' Needs to be of type $combined.";
        }

        return true;
    }    
}
