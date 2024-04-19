<?php

declare( strict_types = 1 );

namespace Tests\Validation;

require_once __DIR__ . '/../../src/Validation/Airflow.php';

use PHPUnit\Framework\TestCase;

final class AirflowTest extends TestCase
{
    use \Cruzio\lib\Netbox\Validation\Airflow;


/*
----------------------------------------------------------------------------- */

    public function testGood() : void
    {

        $result = self::validate_Airflow( input: 'front-to-rear' );
        self::assertIsBool( $result );
        self::assertTrue( $result );
    }


/*
----------------------------------------------------------------------------- */

    public function testBad() : void
    {
        $result = self::validate_Airflow( input: 'bad input' );
        self::assertIsString( $result );
    }
}