<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/IpStatus.php';

use PHPUnit\Framework\TestCase;

final class IpStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\IpStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_IpStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_IpStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}