<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Extras\ContentTypes;

final class ContentTypesTest extends TestExtras
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsContentType() : void
    {
        $o = new ContentTypes();
        $result = $o->options();
        $this->assertIsObject( $result );
    }



/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListContentType() : void
    {
        $o = new ContentTypes();
        $result = $o->get();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'count', $result );
        $this->assertObjectHasProperty( 'next', $result );
        $this->assertObjectHasProperty( 'previous', $result );
        $this->assertObjectHasProperty( 'results', $result );
        $this->assertIsArray( $result->results );
        $this->assertIsObject( $result->results[0] );
        $this->assertObjectHasProperty( 'id', $result->results[0] );
    }

}