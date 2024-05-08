<?php

namespace Cruzio\lib\Netbox\Validation;

trait CircuitStatus
{

/*  VALIDATE CIRCUIT STATUS
----------------------------------------------------------------------------- */

    public static function validate_CircuitStatus( string $input ) : true|string
    {
        $allowed = [
            'planned', 'provisioning', 'active', 'offline', 'deprovisioning', 'decommissioned'
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "Input must be of type $combined.";
        }

        return true;
    }
}