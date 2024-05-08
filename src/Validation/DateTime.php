<?php

namespace Cruzio\lib\Netbox\Validation;

trait DateTime
{

    /* VALIDATE
    ----------------------------------------------------------------------------- */

    public static function validate_DateTime(string $input): true|string
    {
        $pattern = "#^(19|20)[0-9]{2}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T\d\d:\d\d:\d\d\.\d{4}#";
        if( !preg_match( $pattern, $input )) {
            return "'$input' is not a valid DateTime. Must be YYYY-MM-DDT00:00:00.0000 format.";
        }

        return true;
    }
}