<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\FeedType;
use PHPUnit\Framework\TestCase;

final class FeedTypeTest extends TestCase
{
    use FeedType;

/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_FeedType( input: 'primary' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FeedType( input: 'bad input' );
        self::assertIsString( $result );
    }
}