<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/ContactPriority.php';

use PHPUnit\Framework\TestCase;

final class ContactPriorityTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\ContactPriority;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_ContactPriority( input: 'secondary' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_ContactPriority( input: 'bad input' );
        self::assertIsString( $result );
    }
}