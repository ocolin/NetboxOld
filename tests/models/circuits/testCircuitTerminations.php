<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\testCore;

require_once __DIR__ . '/../testCore.php';

class testCircuitTerminations extends testCore
{
    public function __construct()
    {
        parent::__construct();
    }

/*
---------------------------------------------------------------------------- */

    public function testOptions()
    {
        $o = new CircuitTerminations();
        $result = $o->options();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );

        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );

        $this->assertIsArray( $result['headers'] );

        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'name', $result['body'] );
    }



/*
---------------------------------------------------------------------------- */

    public function testGet()
    {
        $o = new CircuitTerminations();
        $result = $o->get();

        $this->assertIsArray( $result );
        $this->assertArrayHasKey( 'status',  $result );
        $this->assertArrayHasKey( 'headers', $result );
        $this->assertArrayHasKey( 'body',    $result );

        $this->assertIsInt( $result['status'] );
        $this->assertEquals( 200, $result['status'] );

        $this->assertIsArray( $result['headers'] );

        $this->assertIsObject( $result['body'] );
        $this->assertObjectHasAttribute( 'count', $result['body'] );
    }


    // public function testPut() {}
    // public function testPost() {}
    // public function testPut() {}
    // public function testPatch() {}
}
