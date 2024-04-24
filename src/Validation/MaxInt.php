<?php

namespace Cruzio\lib\Netbox\Validation;

trait MaxInt
{

    /* VALIDATE
    ----------------------------------------------------------------------------- */

    public static function validate_MaxInt( int $input, int $max ): true|string
    {
        if( $input > $max ) {
            return "Integer cannot be more than $max.";
        }

        return true;
    }
}