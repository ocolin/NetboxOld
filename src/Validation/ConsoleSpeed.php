<?php

namespace Cruzio\lib\Netbox\Validation;

trait ConsoleSpeed
{

/* VALIDATE CONSOLE SPEED
----------------------------------------------------------------------------- */

    public static function validate_ConsoleSpeed( int $input ) : true|string
    {
        $allowed = [
            1200,
            2400,
            4800,
            9600,
            19200,
            38400,
            57600,
            115200
        ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combine = implode( separator: ',', array: $allowed );
            return "Speed '$input' should be: $combine";
        }

        return true;
    }

}