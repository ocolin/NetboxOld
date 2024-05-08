<?php

namespace Cruzio\lib\Netbox\Validation;

trait TerminationType
{
    
/* VALIDATE TERMINATION TYPE
----------------------------------------------------------------------------- */

    public static function validate_TerminationType( string $input ) : true|string
    {
        $allowed = [
            'circuits.circuittermination',
            'dcim.consoleport',
            'dcim.consoleserverport',
            'dcim.frontport',
            'dcim.interface',
            'dcim.powerfeed',
            'dcim.poweroutlet',
            'dcim.powerport',
            'dcim.rearport'
        ];
        if( !in_array( $input, $allowed )) {
            return "erminationType '{$input}' is not valid.";
        }

        return true;
    }
}