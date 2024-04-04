<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data;

use Exception;
use ReflectionClass;
use ReflectionProperty;
use stdClass;

class Data_Core
{


/* RENDER DATA INTO AN OBJECT FOR HTTP
----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public function render(bool $required = false ) : object|null
    {
        $reflect = new ReflectionClass( $this );
        $props   = $reflect->getProperties( ReflectionProperty::IS_PROTECTED );
        $obj = new stdClass();
        foreach( $props as $prop )
        {
            $name = $prop->getName();
            
            if( $prop->isInitialized( $this )) {
                $obj->$name = $this->$name;
            }
            
            elseif( $required === true AND in_array($name, static::required() )) {
                throw new Exception("Property '$name' is required");
            }
        }

        return $obj;
    }




    /*
    ----------------------------------------------------------------------------- */

    public function set( string $property, string|int|float $value ) : void
    {
        if( property_exists( $this, $property )) {
            $rp = new ReflectionProperty( $this, $property );
            if( !$rp->isPrivate() ) {
                if( array_key_exists( $property, $this->validate())) {
                    $val_func = 'validate_' . static::validate()[$property];
                    $result = static::$val_func( $value );
                    if(  $result !== true ) {
                        throw new Exception( $result );
                    }
                }
                $this->$property = $value;
            }
        }
    }

/* GETTER
----------------------------------------------------------------------------- */

    public function __get( string $property ) : mixed
    {
        if( property_exists( $this, $property )) {
            $rp = new ReflectionProperty( $this, $property );
            if( !$rp->isPrivate() ) {
                return $this->$property;
            }
        }

        return null;
    }





/**
 *  @return array<string>
 */
    public static function required() : array
    {
        return [];
    }



/* GET PROPERTY VALIDATION RULES
----------------------------------------------------------------------------- */

/**
 *  @return array<string, string>
 */

    public static function validate() : array
    {
        return [];
    }


/* GET ALL READ ONLY PROPERTIES
----------------------------------------------------------------------------- */

/**
 *  @return array<string>
 */

    public static function readonly() : array
    {
        return [];
    }

}

