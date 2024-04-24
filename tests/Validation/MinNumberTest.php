<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/MinNumber.php';

use PHPUnit\Framework\TestCase;

final class MinNumberTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\MinNumber;

    /*
    ----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_MinNumber( 1, 10 );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


    /*
    ----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_MinNumber( 100, 5 );
        self::assertIsString( $result );
    }
}