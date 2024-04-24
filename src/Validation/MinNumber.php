<?php

namespace Cruzio\lib\Netbox\Validation;

trait MinNumber
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_MinNumber( int|float $input, int|float $min ): true|string
    {
        if( $input < $min ) {
            return "Number cannot be less than $min.";
        }

        return true;
    }
}