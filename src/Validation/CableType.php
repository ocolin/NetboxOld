<?php

namespace Cruzio\lib\Netbox\Validation;

trait CableType
{

/* VALIDATE CABLE TYPE
----------------------------------------------------------------------------- */

    public static function validate_CableType( string $input ) : true|string
    {
        $allowed = [
            'cat3',
            'cat5',
            'cat5e',
            'cat6',
            'cat6a',
            'cat7',
            'cat7a',
            'cat8',
            'dac-active',
            'dac-passive',
            'mrj21-trunk',
            'coaxial',
            'mmf',
            'mmf-om1',
            'mmf-om2',
            'mmf-om3',
            'mmf-om4',
            'mmf-om5',
            'smf',
            'smf-os1',
            'smf-os2',
            'aoc',
            'power'
        ];
        if( !in_array( $input, $allowed )) {
            return "CableType '$input' is not valid cable type.";
        }

        return true;
    }
}