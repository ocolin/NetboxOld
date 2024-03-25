<?php

namespace Cruzio\lib\Netbox\Validation;

trait Slug
{
    
/*
----------------------------------------------------------------------------- */

    public static function validate_Slug( string $input ) : true|string
    {
        return preg_match("#^[a-z0-9_-]+$#i", $input ) 
            ? true 
            : "'{$input}' is not a valid slug.";
    }

}
