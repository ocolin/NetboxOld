<?php

namespace Cruzio\lib\Netbox\Validation;

trait FeedType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_FeedType( string $input ) : true|string
    {
        $allowed = [ 'primary', 'redundant' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return  "FeedType '{$input}' Needs to be: {$combined}";
        }

        return true;
    }
}