<?php

namespace Cruzio\lib\Netbox\Validation;

trait CIDR
{
    
/* VALIDATE CIDR
----------------------------------------------------------------------------- */

    public static function validate_CIDR( string $input ) : true|string
    {
        $error = "'{$input}' is not a valid CIDR.";
        if( !str_contains( $input, '/' )) { return $error; }
        $allowed_netmask = [
            '32','31','30','29','28','27','26','25','24','23','22','21','20',
            '19','18','17','16','15','14','13','12','11','10','9','8'
        ];
        list( $ip, $netmask ) = explode( '/', $input );
        if( !in_array( $netmask, $allowed_netmask )) {
            return $error;
        }

        if( !filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )) {
            return $error;
        }

        return true;
    }

}