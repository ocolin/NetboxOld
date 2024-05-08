<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/FilterLogic.php';

use PHPUnit\Framework\TestCase;

final class FilterLogicTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\FilterLogic;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_FilterLogic( input: 'exact' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_FilterLogic( input: 'bad input' );
        self::assertIsString( $result );
    }
}