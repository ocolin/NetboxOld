<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params;

interface ParamsInterface
{
    /**
     * @return array<string, int|string|float|array<string|int|float>>
     */
    public function render() : array;
}