<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\ModelsInterface;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Params\ParamsInterface;
use GuzzleHttp\Exception\GuzzleException;

class PrefixesAvailablePrefixes extends IPAM_Core implements ModelsInterface
{
    public function __construct( ?HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= "prefixes/";
    }


/* GET METHOD DETAIL
---------------------------------------------------------------------------- */

    /**
     * @param integer|null $id
     * @param ParamsInterface|null $params
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */
    public function get(
                   ?int $id = null,
        ParamsInterface $params = null,
                  array $headers = []
    ) : Response
    {
        $this->uri .= "$id/available-prefixes/";
        $params = $params === null ? [] : $params->render();

        return $this->http->get( 
                uri: $this->uri, 
             params: $params,
            headers: $headers 
        );
    }
}
