<?php

namespace Cruzio\lib\Netbox\Validation;

trait FhrpGroupAuthType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_FhrpGroupAuthType( string $input ) : true|string
    {
         $allowed = [ 'plaintext', 'md5' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "hrpGroupProtocol '{$input}' Needs to be type: {$combined}.";
        }

        return true;
    }
}