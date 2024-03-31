<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params;

use ReflectionException;
use ReflectionProperty;
use ReflectionClass;

class Params_Core
{


/* GETTER
----------------------------------------------------------------------------- */

    public function __get( string $prop ) : mixed {
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
     * @param string $prop name of class property
     * @param string|int|array<string> $value value to assign to prop
     * @throws ReflectionException
     */

    public function __set(string $prop, string|int|array $value ) : void
    {
        if( property_exists( $this, $prop )) {
            $rp = new ReflectionProperty( static::class, $prop );
            $type = $rp->getType()->getName();
            if( 
                $type === 'array' AND
                gettype( $value !== 'array' )
            ) {
                $this->$prop[] = $value;
            } else {
                $this->$prop = $value;
            }
        }
    }

/*
------------------------------------------------------------------------ */

    public function render() : array
    {
        $output = [];
        $reflect = new ReflectionClass( $this );
        $props   = $reflect->getProperties( ReflectionProperty::IS_PROTECTED );
        foreach( $props as $prop )
        {
            if( $prop->isInitialized( $this )) {
                $name = $prop->getName();
                $output[$name] = $this->$name;
            }
        }

        return $output;
    }
}