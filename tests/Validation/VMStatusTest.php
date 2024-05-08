<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/VMStatus.php';

use PHPUnit\Framework\TestCase;

final class VMStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\VMStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_VMStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_VMStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}