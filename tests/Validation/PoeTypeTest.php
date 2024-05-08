<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/PoeType.php';

use PHPUnit\Framework\TestCase;

final class PoeTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\PoeType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_PoeType( input: 'passive-24v-4pair' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_PoeType( input: 'bad input' );
        self::assertIsString( $result );
    }
}