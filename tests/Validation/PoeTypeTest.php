<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\PoeType;
use PHPUnit\Framework\TestCase;

final class PoeTypeTest extends TestCase
{
    use PoeType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_PoeType( input: 'passive-24v-4pair' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PoeType( input: 'bad input' );
        self::assertIsString( $result );
    }
}