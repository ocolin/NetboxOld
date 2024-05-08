<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RfChannel.php';

use PHPUnit\Framework\TestCase;

final class RfChannelTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RfChannel;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RfChannel( input: '2.4g-1-2412-22' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RfChannel( input: 'bad input' );
        self::assertIsString( $result );
    }
}