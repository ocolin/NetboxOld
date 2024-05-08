<?php

namespace Cruzio\lib\Netbox\Validation;

trait WirelessAuthCipher
{
    
/* VALIDATE WIRELESS AUTH TYPE
----------------------------------------------------------------------------- */

    public static function validate_WirelessAuthCipher( string $input ) : true|string
    {
        $allowed = [ 'auto', 'tkip', 'aes' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "WirelessAuthCipher '{$input}' should be in: {$combined}";
        }

        return true;
    }
}
