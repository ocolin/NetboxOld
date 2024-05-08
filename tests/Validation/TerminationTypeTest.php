<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/TerminationType.php';

use PHPUnit\Framework\TestCase;

final class TerminationTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\TerminationType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_TerminationType( input: 'circuits.circuittermination' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_TerminationType( input: 'bad input' );
        self::assertIsString( $result );
    }
}