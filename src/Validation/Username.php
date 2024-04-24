<?php

namespace Cruzio\lib\Netbox\Validation;

trait Username
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_Username(string $input): true|string
    {
        $pattern = "#^[_a-z0-9@.+-]{0,150}$#i";
        if( !preg_match( $pattern, $input )) {
            return "'$input' is not a valid Username. Must be Letters, digits and @/./+/-/_ only.";
        }

        return true;
    }
}