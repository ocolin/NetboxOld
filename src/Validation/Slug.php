<?php

namespace Cruzio\lib\Netbox\Validation;

trait Slug
{
    
/* VALIDATE
----------------------------------------------------------------------------- */

    public static function validate_Slug( string $input, int $max = null ) : true|string
    {
        if( $max !== null AND strlen( $input ) > $max ) {
            return "Length of slug must not be over $max characters.";
        }

        return preg_match("#^[a-z0-9_-]+$#i", $input ) 
            ? true 
            : "'$input' is not a valid slug.";
    }

}
