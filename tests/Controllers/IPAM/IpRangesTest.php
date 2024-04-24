<?php

declare( strict_types = 1 );

namespace Tests\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\IPAM\IpRanges;
use Exception;
use PHPUnit\Framework\Attributes\Depends;

final class IpRangesTest extends TestIPAM
{

    /* OPTIONS TEST
    ----------------------------------------------------------------------------- */

    public function testOptionsIpRange() : void
    {
        $o = new IpRanges();
        $result = $o->options();
        print_r($result);
        $this->assertIsObject( $result );
    }


    /* BAD CREATE TEST
    ----------------------------------------------------------------------------- */

    public function testCreateIpRangeBad() : void
    {
        $o = new IpRanges();
        $result = $o->create( data: [] );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


    /* CREATE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    public function testCreateIpRange() : int
    {
        $result = self::createIpRange();

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );

        return $result->id;
    }



    /* GET TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateIpRange')]
    public function testGetIpRange( int $id ) : void
    {
        $o = new IpRanges();
        $result = $o->get( id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }


    /* GET LIST TEST
    ----------------------------------------------------------------------------- */

    public function testGetListIpRange() : void
    {
        $o = new IpRanges();
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


    /* BAD REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateIpRange')]
    public function testReplaceIpRangeBad( int $id ) : void
    {
        $o = new IpRanges();
        $result = $o->replace( data: [], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'error', $result );
        $this->assertIsString( $result->error );
    }


    /* REPLACE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateIpRange')]
    public function testReplaceIpRange( int $id ) : void
    {
        $o = new IpRanges();
        $result = $o->replace( data: [
            'start_address' => '192.168.77.0/24',
            'end_address' => '192.168.77.254/24',
            'description' => 'PHPUnit_Replace',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* UPDATE TEST
    ----------------------------------------------------------------------------- */

    /**
     * @throws Exception
     */
    #[Depends('testCreateIpRange')]
    public function testUpdateIpRange( int $id ) : void
    {
        $o = new IpRanges();
        $result = $o->update( data: [
            'description' => 'PHPUnit_Update',
        ], id: $id );

        $this->assertIsObject( $result );
        $this->assertObjectHasProperty( 'id', $result );
        $this->assertIsInt( $result->id );
    }



    /* DELETE TEST
    ----------------------------------------------------------------------------- */

    #[Depends('testCreateIpRange')]
    public function testDeleteIpRange( int $id ) : void
    {
        $o = new IpRanges();
        $result = $o->delete( id: $id );

        $this->assertNull( $result );
    }
}