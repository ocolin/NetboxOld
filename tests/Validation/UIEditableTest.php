<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/UIEditable.php';

use PHPUnit\Framework\TestCase;

final class UIEditableTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\UIEditable;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_UIEditable( input: 'yes' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_UIEditable( input: 'bad input' );
        self::assertIsString( $result );
    }
}