<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/CustomFieldObjectType.php';

use PHPUnit\Framework\TestCase;

final class CustomFieldObjectTypeTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\CustomFieldObjectType;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_CustomFieldObjectType( input: 'account.usertoken' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }

/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_CustomFieldObjectType( input: 'bad input' );
        self::assertIsString( $result );
    }
}