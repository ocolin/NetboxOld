<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/IpRole.php';

use PHPUnit\Framework\TestCase;

final class IpRoleTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\IpRole;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_IpRole( input: 'loopback' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_IpRole( input: 'bad input' );
        self::assertIsString( $result );
    }
}