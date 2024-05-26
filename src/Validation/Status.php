<?php

namespace Cruzio\lib\Netbox\Validation;

trait Status
{
    
/* VALIDATE 
----------------------------------------------------------------------------- */

    public static function validate_Status( string $input ) : true|string
    {
        $allowed = [
            'planned',
            'staging',
            'active',
            'decommissioning',
            'retired'
        ];
        if( in_array( needle: $input, haystack: $allowed )) {
            return true;
        }
        $statuses = implode( separator: ',', array: $allowed );

        return "'$input' is not in statuses: $statuses";
    }

}
