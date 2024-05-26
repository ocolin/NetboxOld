<?php

namespace Cruzio\lib\Netbox\Validation;

trait WirelessAuthCipher
{
    
/* VALIDATE WIRELESS AUTH TYPE
----------------------------------------------------------------------------- */

    public static function validate_WirelessAuthCipher( string $input ) : true|string
    {
        $allowed = [ 'auto', 'tkip', 'aes' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "WirelessAuthCipher '$input' should be in: $combined";
        }

        return true;
    }
}
