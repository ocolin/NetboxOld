<?php

namespace Cruzio\lib\Netbox\Validation;

trait ModuleBayStatus
{
        
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_ModuleBayStatus( string $input ) : true|string
    {
        $allowed = [
            'offline',
            'active',
            'planned',
            'staged',
            'failed',
            'decommissioning'
        ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "ModBayStatus '$input' Needs to be in: $combined";
        }

        return true;
    }

}
