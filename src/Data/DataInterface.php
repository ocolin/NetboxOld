<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data;

interface DataInterface
{
    public function render( bool $required = false ) : object|null;

    /**
     * @return array<string>
     */

    public static function readonly() : array;

    /**
     * @return array<string, array<string>>
     */
    
    public static function validate() : array;

    public function set( string $property, string|int|float $value ) : void;

    public function get( string $property ) : mixed;
}