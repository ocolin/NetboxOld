<?php

declare( strict_types = 1 );

namespace Tests\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Users\Config;

final class ConfigTest extends TestUsers
{

/* OPTIONS TEST
----------------------------------------------------------------------------- */

    public function testOptionsUser() : void
    {
        $o = new Config();
        $result = $o->options();
        $this->assertIsObject( $result );
    }


/* GET LIST TEST
----------------------------------------------------------------------------- */

    public function testGetListConfig() : void
    {
        $o = new Config();
        $result = $o->get();

        $this->assertIsObject( $result );
    }
}