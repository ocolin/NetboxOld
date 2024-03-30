<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data;

class Data_Core
{


/* RENDER DATA INTO AN OBJECT FOR HTTP
----------------------------------------------------------------------------- */

    /**
     * @throws \Exception
     */
    public function render(bool $required = false ) : object|null
    {
        $reflect = new \ReflectionClass( $this );
        $props   = $reflect->getProperties( \ReflectionProperty::IS_PROTECTED );
        $obj = new \stdClass();
        foreach( $props as $prop )
        {
            $name = $prop->getName();
            
            if( $prop->isInitialized( $this )) {
                $obj->$name = $this->$name;
            }
            
            elseif( $required === true AND in_array($name, static::required() )) {
                throw new \Exception("Property '{$name}' is required");
            }
        }

        return $obj;
    }


/* SETTER
----------------------------------------------------------------------------- */

    /**
     * @throws \Exception
     */
    public function __set(string $property, mixed $value ) : void
    {
        if( property_exists( $this, $property )) {
            $rp = new \ReflectionProperty( $this, $property );
            if( !$rp->isPrivate() ) {
                if( array_key_exists( $property, $this->validate())) {
                    $val_func = 'validate_' . static::validate()[$property];
                    $result = static::$val_func( $value );
                    if(  $result !== true ) {
                        throw new \Exception( $result );
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
            $rp = new \ReflectionProperty( $this, $property );
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

/*
----------------------------------------------------------------------------- */

    public static function validate_IPv4( string $input ) : true|string
    {
        return filter_var( $input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
            ? true
            : "'$input' is not a valid IPv4 Address.";
    }
    
}

