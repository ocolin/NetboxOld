<?php

declare( strict_types = 1 );

namespace Tests\Validation;

use Cruzio\lib\Netbox\Validation\Airflow;
use PHPUnit\Framework\TestCase;

final class AirflowTest extends TestCase
{
    use Airflow;


/* GOOD TEST
----------------------------------------------------------------------------- */

    public function testGood() : void
    {
        $result = self::validate_Airflow( input: 'front-to-rear' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/* BAD TEST
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Airflow( input: 'bad input' );
        self::assertIsString( $result );
    }
}