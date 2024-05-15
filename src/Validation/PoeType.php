<?php

namespace Cruzio\lib\Netbox\Validation;

trait PoeType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_PoeType( string $input ) : true|string
    {
        $allowed = [ 
            'type1-ieee802.3af',
            'type2-ieee802.3at',
            'type3-ieee802.3bt',
            'type4-ieee802.3bt',
            'passive-24v-2pair',
            'passive-24v-4pair',
            'passive-48v-2pair',
            'passive-48v-4pair'
         ];
        if( !in_array( $input, $allowed )) {
            $combine = implode( ',', $allowed );
            return "PoeMode '$input' needs to be of: $combine.";
        }

        return true;
    }
}
