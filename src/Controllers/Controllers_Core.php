<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers;

use Cruzio\lib\Netbox\Params\ParamsInterface;

class Controllers_Core
{
    protected $model;


    public static function arrayToParam( array $array, ParamsInterface $params ) : ParamsInterface
    {
        foreach( $array as $key => $value )
        {
            if( property_exists( $params, $key )) {
                $params->$key = $value;
            }
        }
    }
}