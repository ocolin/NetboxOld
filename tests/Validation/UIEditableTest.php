<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;

final class UIEditableTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\UIEditable;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_UIEditable( input: 'yes' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_UIEditable( input: 'bad input' );
        self::assertIsString( $result );
    }
}