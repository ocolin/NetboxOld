<?php

namespace Cruzio\lib\Netbox\Validation;

trait Date
{

    /* VALIDATE
    ----------------------------------------------------------------------------- */

    public static function validate_Date(string $input): true|string
    {
        $pattern = "#^(19|20)[0-9]{2}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])#";
        if( !preg_match( pattern: $pattern, subject: $input )) {
            return "'$input' is not a valid Date. Must be YYYY-MM-DD format.";
        }

        return true;
    }
}