<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models;

class ModelsCore
{

    public static function autoOptions( $class, array $optionsArray )
    {
        $class = str_replace( 'Models', 'Options', $class );
        $options = new $class();
        foreach( $optionsArray as $key => $value )
        {
            if( property_exists( $options, $key )) {
                $options->$key = $value;
            }
        }
        print_r( $options );

        return $options;
    }

}