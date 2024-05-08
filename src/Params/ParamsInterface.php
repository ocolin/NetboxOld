<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params;

interface ParamsInterface
{
    /**
     * @return array<string, int|string|float|array<string|int|float>>
     */
    public function render() : array;


    public function get( string $prop ) : mixed;


    /**
     * @param string $param
     * @param string|int|float|array<string|int|float> $value
     * @return void
     */
    public function set( string $param, string|int|float|array $value ) : void;
}