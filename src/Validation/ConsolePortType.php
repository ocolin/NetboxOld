<?php

namespace Cruzio\lib\Netbox\Validation;

trait ConsolePortType
{


/*
----------------------------------------------------------------------------- */

    public static function validate_ConsolePortType( string $input ) : true|string
    {
        $allowed = [
            'de-9',
            'db-25',
            'rj-11',
            'rj-12',
            'rj-45',
            'mini-din-8',
            'usb-a',
            'usb-b',
            'usb-c',
            'usb-mini-a',
            'usb-mini-b',
            'usb-micro-a',
            'usb-micro-b',
            'usb-micro-ab',
            'other'
        ];
        if( !in_array( $input, $allowed )) {
            return "ConsolePort '{$input}' is not valid type.";
        }

        return true;
    }

}