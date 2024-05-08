<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PrefixStatus.php';

use PHPUnit\Framework\TestCase;

final class PrefixStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PrefixStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PrefixStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PrefixStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}