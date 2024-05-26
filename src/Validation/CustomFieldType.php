<?php

namespace Cruzio\lib\Netbox\Validation;

trait CustomFieldType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_CustomFieldType( string $input ) : true|string
    {
        $allowed = [ 
            'text',
            'longtext',
            'integer',
            'decimal',
            'boolean',
            'date',
            'datetime',
            'url',
            'json',
            'multiselect',
            'object',
            'multiobject'
         ];
         if( !in_array( needle: $input, haystack: $allowed )) {
            $combined = implode( separator: ', ', array: $allowed );
            return "CustomFieldType '$input' Needs to be of type: $combined.";
         }

        return true;
    }
}