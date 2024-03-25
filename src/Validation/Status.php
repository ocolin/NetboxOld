<?php

namespace Cruzio\lib\Netbox\Validation;

trait Status
{
    
/*
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
        if( in_array( $input, $allowed )) {
            return true;
        }
        $statuses = implode( ',', $allowed );

        return "'{$input}' is not in statuses: {$statuses}";
    }

}
