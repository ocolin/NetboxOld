<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Props;

interface PropsInterface
{
    /**
     * @return array<string, int|string|float|array<string|int|float>>
     */
    public function render() : array;
}