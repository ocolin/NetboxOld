<?php

namespace Cruzio\lib\Netbox\Validation;

trait UIVisible
{

/* VALIDATE UIVISIBLE
----------------------------------------------------------------------------- */

    public static function validate_UIVisible( string $input ) : true|string
    {
        $allowed = [ 'always', 'if-set', 'hidden' ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "UIVisible '{$input}' Needs to be of type: {$combined}.";
         }

        return true;
    }

}
