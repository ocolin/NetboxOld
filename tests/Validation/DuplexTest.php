<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Duplex.php';

use PHPUnit\Framework\TestCase;

final class DuplexTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Duplex;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_Duplex( input: 'full' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Duplex( input: 'bad input' );
        self::assertIsString( $result );
    }
}