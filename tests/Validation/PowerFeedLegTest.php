<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PowerFeedLeg.php';

use PHPUnit\Framework\TestCase;

final class PowerFeedLegTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PowerFeedLeg;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PowerFeedLeg( input: 'A' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PowerFeedLeg( input: 'bad input' );
        self::assertIsString( $result );
    }
}