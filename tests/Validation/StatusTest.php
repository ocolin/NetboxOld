<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Status.php';

use PHPUnit\Framework\TestCase;

final class StatusTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Status;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_Status( input: 'active' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Status( input: 'bad input' );
        self::assertIsString( $result );
    }
}