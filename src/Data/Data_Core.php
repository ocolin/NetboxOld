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
     * @param bool $required
     * @return object
     * @throws Exception
     */
    public function render( bool $required = false ) : object
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
            
            elseif( $required === true AND in_array( $name, static::required() )) {
                throw new Exception("Property '$name' is required");
            }
        }

        return $obj;
    }




/* SET A DATA PARAMETER
----------------------------------------------------------------------------- */

    /**
     * @param string $property
     * @param string|int|float|bool $value
     * @throws Exception
     */
    public function set( string $property, string|int|float|bool $value ) : void
    {
        if( property_exists( $this, $property )) {
            $rp = new ReflectionProperty( $this, $property );
            if( !$rp->isPrivate() ) {
                if( array_key_exists( $property, $this->validate())) {
                    self::build_Validate( property: $property, value: $value );
/*
                    $val_func = 'validate_' . static::validate()[$property];
                    $result = static::$val_func( $value );
                    if(  $result !== true ) {
                        throw new Exception( $result );
                    }
*/
                }
                $this->$property = $value;
            }
        }
    }


    /**
     * @param  string $property
     * @param string|int|float|bool $value
     * @throws Exception
     *
     */
    protected static function build_Validate( string $property, string|int|float|bool  $value ) : void
    {
        $params = static::validate()[$property];
        $val_func =  'validate_' . array_shift( $params );
        $result = static::$val_func( $value );
        if(  $result !== true ) {
            throw new Exception( $result );
        }

        /*
        $type = static::validate()[$property] );
        if( gettype( $value ) === 'array' ) {

        } else {
            $val_func = 'validate_' . $type;
            $result = static::$val_func( $value );
            if(  $result !== true ) {
                throw new Exception( $result );
            }
        }
        */
    }


/* GET A DATA PARAMETER
----------------------------------------------------------------------------- */

    public function get( string $property ) : mixed
    {
        if( property_exists( $this, $property )) {
            $rp = new ReflectionProperty( $this, $property );
            if( !$rp->isPrivate() ) {
                return $this->$property;
            }
        }

        return null;
    }



/* GET REQUIRED PROPERTIES
----------------------------------------------------------------------------- */

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
 *  @return array<string, array<string>>
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

