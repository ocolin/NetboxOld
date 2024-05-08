<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/FeedType.php';

use PHPUnit\Framework\TestCase;

final class FeedTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\FeedType;

    /*
    ----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_FeedType( input: 'primary' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


    /*
    ----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FeedType( input: 'bad input' );
        self::assertIsString( $result );
    }
}