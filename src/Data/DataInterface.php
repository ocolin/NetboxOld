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
     * @return array<string, string>
     */
    
    public static function validate() : array ;
}