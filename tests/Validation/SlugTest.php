<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Slug.php';

use PHPUnit\Framework\TestCase;

final class SlugTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Slug;

/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_Slug( input: 'station' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Slug( input: 'bad/input' );
        self::assertIsString( $result );
    }
}