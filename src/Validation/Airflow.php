<?php

namespace Cruzio\lib\Netbox\Validation;

trait Airflow
{

/* VALIDATE AIRFLOW
----------------------------------------------------------------------------- */

    public static function validate_Airflow( string $input ) : true|string
    {
        $allowed = [
            'front-to-rear',
            'rear-to-front',
            'left-to-right',
            'right-to-left',
            'side-to-rear',
            'passive',
            'mixed'
        ];
        if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ',', array: $allowed );
            return "Airflow '$input' must be one of: $combined";
        }

        return true;
    }
}