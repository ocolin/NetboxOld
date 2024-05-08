<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/RackType.php';

use PHPUnit\Framework\TestCase;

final class RackTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\RackType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_RackType( input: '2-post-frame' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_RackType( input: 'bad input' );
        self::assertIsString( $result );
    }
}