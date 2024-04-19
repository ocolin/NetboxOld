<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ModuleBayStatus.php';

use PHPUnit\Framework\TestCase;

final class ModuleBayStatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ModuleBayStatus;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ModuleBayStatus( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ModuleBayStatus( input: 'bad input' );
        self::assertIsString( $result );
    }
}