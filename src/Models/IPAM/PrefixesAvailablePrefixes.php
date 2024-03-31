<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Params\ParamsInterface;
use GuzzleHttp\Exception\GuzzleException;

class PrefixesAvailablePrefixes extends IPAM_Core
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "prefixes/";
    }


/* GET METHOD DETAIL
---------------------------------------------------------------------------- */

    /**
     * @param integer $id
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */
    public function getDetail(
        int             $id,
        ParamsInterface $params = null,
        array           $headers = []
    ) : Response
    {
        $this->uri .= "{$id}/available-prefixes/";
        $params = $params === null ? [] : $params->render();

        return $this->http->get( 
                uri: $this->uri, 
             params: $params,
            headers: $headers 
        );
    }

}
