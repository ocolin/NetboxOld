<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/CableStatus.php';

use PHPUnit\Framework\TestCase;

final class CableStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\CableStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_CableStatus( input: 'planned' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CableStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}