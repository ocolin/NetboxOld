<?php

namespace Cruzio\lib\Netbox\Validation;

trait RangeInt
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_RangeInt( int $input, int $min, int $max ): true|string
    {
        if( $input < $min OR $input > $max ) {
            return "Integer must be between $min and $max.";
        }

        return true;
    }
}