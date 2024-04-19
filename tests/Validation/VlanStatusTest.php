<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/VlanStatus.php';

use PHPUnit\Framework\TestCase;

final class VlanStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\VlanStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_VlanStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_VlanStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}