<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params;

use ReflectionProperty;
use ReflectionClass;

class Params_Core
{

    protected string $exclude;

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
     * @param string $param name of class property
     * @param string|int|array<string> $value value to assign to prop
     */

    public function __set(string $param, string|int|float|array $value ) : void
    {
        if( property_exists( $this, $param )) {
            $rp = new ReflectionProperty( $this, $param );
            if (!$rp->isPrivate()) {
                $this->$param = $value;
            }
        }
    }

/*
------------------------------------------------------------------------ */

    /**
     * @return array<string, string|int|float|array<string|int|float>>
     */
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