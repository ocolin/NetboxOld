<?php

namespace Cruzio\lib\Netbox\Validation;

trait ServiceProtocol
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_ServiceProtocol( string $input ) : true|string
    {
        $allowed = [ 'tcp', 'udp', 'sctp' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "ServiceProtocol '$input' Must be of type: $combined.";
        }

        return true;
    }
}
