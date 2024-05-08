<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params;

use AllowDynamicProperties;
use ReflectionProperty;
use ReflectionClass;
use function PHPUnit\Framework\stringStartsWith;

#[AllowDynamicProperties]
class Params_Core
{

    protected string $exclude;

/* GETTER
----------------------------------------------------------------------------- */
    public function get( string $prop ) : mixed {
        if( property_exists( $this, $prop )) {
            $rp = new ReflectionProperty( $this, $prop );
            if( !$rp->isPrivate()) {
                return $this->$prop;
            }
        }

        return null;
    }



/* SETTER
----------------------------------------------------------------------------- */

    /**
     * @param string $param name of class property
     * @param string|int|float|array<string|int|float> $value value to assign to prop
     */

    public function set( string $param, string|int|float|array $value ) : void
    {
        if( str_starts_with( $param, 'cf_' )) {
            $this->$param = $value;
        }
        if( property_exists( $this, $param )) {
            $rp = new ReflectionProperty( $this, $param );
            if ( !$rp->isPrivate() ) {
                $this->$param = $value;
            }
        }
    }


/* RENDER A PARAM OBJECT
------------------------------------------------------------------------ */

    /**
     * @return array<string, string|int|float|array<string|int|float>>
     */
    public function render() : array
    {

        $output = [];
        $reflect = new ReflectionClass( $this );
        $props   = $reflect->getProperties( filter: ReflectionProperty::IS_PROTECTED );
        $all_props = get_object_vars( $this );

        foreach( $props as $prop )
        {
            if( $prop->isInitialized( $this )) {
                $name = $prop->getName();
                $output[$name] = $this->$name;
            }
        }

        foreach( $all_props as $key => $value )
        {
            if( str_starts_with( haystack: $key, needle: 'cf_' )) {
                $output[$key] = $value;
            }
        }

        return $output;
    }



/* COLUMNS TO VALIDATE
------------------------------------------------------------------------ */

    /**
     * @return array<string, string>
     */
    public static function validate() : array
    {
        return [];
    }
}