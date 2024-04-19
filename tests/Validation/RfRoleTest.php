<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RfRole.php';

use PHPUnit\Framework\TestCase;

final class RfRoleTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RfRole;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RfRole( input: 'station' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RfRole( input: 'bad input' );
        self::assertIsString( $result );
    }
}