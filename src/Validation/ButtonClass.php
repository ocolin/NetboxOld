<?php

namespace Cruzio\lib\Netbox\Validation;

trait ButtonClass
{

/* VALIDATE BUTTON CLASS
----------------------------------------------------------------------------- */

    public static function validate_ButtonClass( string $input ) : true|string
    {
        $allowed = [ 
            'outline-dark', 
            'blue', 
            'indigo',
            'purple',
            'pink',
            'red',
            'orange',
            'yellow',
            'green',
            'teal',
            'cyan',
            'gray',
            'black',
            'white',
            'ghost-dark'        
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ',', $allowed );
            return "ButtonClass '{$input}' Needs to be in: {$combined}";
        }

        return true;
    }

}