<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Username.php';

use PHPUnit\Framework\TestCase;

final class UsernameTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Username;


    /*
    ----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_Username( input: 'abc123_@.+-' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

    /*
    ----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Username( input: '%^&' );
        self::assertIsString( $result );
    }
}