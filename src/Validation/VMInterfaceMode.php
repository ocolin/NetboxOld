<?php

namespace Cruzio\lib\Netbox\Validation;

trait VMInterfaceMode
{

/* VALIDATE VM STATUS
----------------------------------------------------------------------------- */

    public static function validate_VMInterfaceMode( string $input ) : true|string
    {
        $allowed = [
            'offline',
            'active',
            'planned',
            'staged',
            'failed',
            'decommissioning',
        ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "VMStatus '$input' Needs to be of type: $combined.";
        }

        return true;
    }
}
