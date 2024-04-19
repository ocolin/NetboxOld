<?php

namespace Cruzio\lib\Netbox\Validation;

trait ServiceProtocol
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_ServiceProtocol( string $input ) : true|string
    {
        $allowed = [ 'tcp', 'udp', 'sctp' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "ServiceProtocol '{$input}' Must be of type: {$combined}.";
        }

        return true;
    }
}
