<?php

namespace Cruzio\lib\Netbox\Validation;

trait PowerFeedLeg
{
    
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_PowerFeedLeg( string $input ) : true|string
    {
        $allowed = [ 'A', 'B', 'C' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "FeedLeg '{$input}' must be of {$combined}.";
        }

        return true;
    }
}
