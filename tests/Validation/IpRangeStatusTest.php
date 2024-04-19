<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/IpRangeStatus.php';

use PHPUnit\Framework\TestCase;

final class IpRangeStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\IpRangeStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_IpRangeStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_IpRangeStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}