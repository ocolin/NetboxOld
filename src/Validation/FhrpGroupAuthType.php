<?php

namespace Cruzio\lib\Netbox\Validation;

trait FhrpGroupAuthType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_FhrpGroupAuthType( string $input ) : true|string
    {
         $allowed = [ 'plaintext', 'md5' ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "hrpGroupProtocol '$input' Needs to be type: $combined.";
        }

        return true;
    }
}