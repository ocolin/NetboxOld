<?php

namespace Cruzio\lib\Netbox\Validation;

trait PortType
{

/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_PortType( string $input ) : true|string
    {
        $allowed = [
            '8p8c',
            '8p6c',
            '8p4c',
            '8p2c',
            '6p6c',
            '6p4c',
            '6p2c',
            '4p4c',
            '4p2c',
            'gg45',
            'tera-4p',
            'tera-2p',
            'tera-1p',
            '110-punch',
            'bnc',
            'f',
            'n',
            'mrj21',
            'fc',
            'lc',
            'lc-pc',
            'lc-upc',
            'lc-apc',
            'lsh',
            'lsh-pc',
            'lsh-upc',
            'lsh-apc',
            'lx5',
            'lx5-pc',
            'lx5-upc',
            'lx5-apc',
            'mpo',
            'mtrj',
            'sc',
            'sc-pc',
            'sc-upc',
            'sc-apc',
            'st',
            'cs',
            'sn',
            'sma-905',
            'sma-906',
            'urm-p2',
            'urm-p4',
            'urm-p8',
            'splice',
            'other'
        ];

        if( !in_array( needle: $input, haystack: $allowed )) {
            return "'$input' is not a valid type.";
        }

        return true;
    }

}
