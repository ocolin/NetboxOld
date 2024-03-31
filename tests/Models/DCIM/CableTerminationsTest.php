<?php

declare( strict_types = 1 );

namespace Tests\Models\DCIM;

use GuzzleHttp\Exception\GuzzleException;
use Tests\Models\testCore;
use Cruzio\lib\Netbox\Models\DCIM\CableTerminations;;
use Cruzio\lib\Netbox\Data\DCIM\CableTerminations AS Data;
use PHPUnit\Framework\Attributes\Depends;

require_once __DIR__ . '/../testCore.php';

final class CableTerminationsTest extends testCore
{

/* TEST OPTIONS
---------------------------------------------------------------------------- */

    /**
     * @throws GuzzleException
     */
    public function testOptions() : void
    {
        $o = new CableTerminations();
        $result = $o->options();
        print_r( $result->body );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'status',  $result );
        $this->assertObjectHasProperty( 'headers', $result );
        $this->assertObjectHasProperty( 'body',    $result );
        $this->assertIsInt( $result->status );
        $this->assertEquals( 200, $result->status );
        $this->assertIsArray( $result->headers );
        $this->assertIsObject( $result->body );
    }

}