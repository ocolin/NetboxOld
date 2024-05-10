<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class UIVisibleTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\UIVisible;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_UIVisible( input: 'always' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_UIVisible( input: 'bad input' );
        self::assertIsString( $result );
    }
}