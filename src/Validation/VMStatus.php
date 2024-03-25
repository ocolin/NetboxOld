<?php

namespace Cruzio\lib\Netbox\Validation;

trait VMStatus
{

/* 
----------------------------------------------------------------------------- */

    public static function validate_VMStatus( string $input ) : true|string
    {
        $allowed = [
            'offline',
            'active',
            'planned',
            'staged',
            'failed',
            'decommissioning',
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "VMStatus '{$input}' Needs to be of type: {$combined}.";
        }

        return true;
    }
}
