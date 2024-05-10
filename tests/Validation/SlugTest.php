<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class SlugTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Slug;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_Slug( input: 'station' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Slug( input: 'bad/input' );
        self::assertIsString( $result );
    }
}