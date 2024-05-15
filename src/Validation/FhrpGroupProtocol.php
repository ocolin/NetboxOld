<?php

namespace Cruzio\lib\Netbox\Validation;

trait FhrpGroupProtocol
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_FhrpGroupProtocol( string $input ) : true|string
    {
        $allowed = [
            'vrrp2',
            'vrrp3',
            'carp',
            'clusterxl',
            'hsrp',
            'glbp',
            'other'
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "hrpGroupProtocol '$input' Needs to be type: $combined.";
        }

        return true;
    }
}