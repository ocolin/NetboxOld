<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models;

require_once( __DIR__ . '/../../vendor/autoload.php' );

use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Params\ParamsInterface;
use GuzzleHttp\Exception\GuzzleException;


abstract class Models_Core
{
    protected HTTP $http;
    protected string $uri = '';

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }

/* AUTO OPTIONS
---------------------------------------------------------------------------- */

/**
 * @param   string $class
 * @param   array<string, string> $optionsArray
 * @return  object
 */
    public static function autoOptions( string $class, array $optionsArray ) : object
    {
        $class = str_replace( search: 'Models', replace: 'Options', subject: $class );
        $options = new $class();
        foreach( $optionsArray as $key => $value )
        {
            if( property_exists( $options, property: $key )) {
                $options->$key = $value;
            }
        }

        return $options;
    }



    /* OPTIONS METHOD
    ---------------------------------------------------------------------------- */

    /**
     * List details about API call.
     *
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function options( array $headers = [] ) : Response
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

    /**
     * Create a single Platform.
     *
     * @param DataInterface $data  data to be sent.
     * @param array<string, string> $headers HTML request headers
     * @param array<string, string> $params URL Parameters
     * @return Response
     * @throws GuzzleException
     */

    public function post(
        DataInterface $data,
                array $headers = [],
                array $params  = [],
    ) : Response
    {

        return $this->http->post(
                uri: $this->uri,
               body: $data->render( required: true ),
             params: $params,
            headers: $headers
        );
    }


/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

    /**
     * Update Site
     *
     * @param DataInterface $data data to send.
     * @param int|null $id Numerical ID of Site to update.
     * @param array<string, string> $headers HTML request headers
     * @param array<string, string> $params URL Parameters
     * @return Response
     * @throws GuzzleException
     */

    public function put(
        DataInterface $data,
                 ?int $id = null,
                array $headers = [],
                array $params  = []
    ) : Response
    {
        if( $id !== null ) { $this->uri .= "$id/"; }

        return $this->http->put(
                uri: $this->uri,
               body: $data->render( required: true ),
             params: $params,
            headers: $headers
        );
    }


/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

    /**
     * Update Site value(s).
     *
     * @param int|null $id Numerical ID of Site to update.
     * @param DataInterface $data  data to send.
     * @param array<string, string> $headers HTML request headers
     * @param array<string, string> $params URL Parameters
     * @return Response
     * @throws GuzzleException
     */

    public function patch(
        DataInterface $data,
                 ?int $id = null,
                array $headers = [],
                array $params  = []
    ) : Response
    {
        if( $id !== null ) { $this->uri .= "$id/"; }

        return $this->http->patch(
                uri: $this->uri,
               body: $data->render(),
             params: $params,
            headers: $headers
        );
    }



/* DELETE METHOD DETAIL
---------------------------------------------------------------------------- */

    /**
     * Delete an individual object.
     *
     * @param int|null $id A unique integer value identifying an object.
     * @param array<DataInterface> $data array of data objects
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function delete(
         ?int $id = null,
        array $data = [],
        array $headers = []
    ) : Response
    {
        if( $id !== null ) {
            $this->uri .= "$id/";
        }

        $body = [];
        if( !empty( $data )) {
            foreach( $data as $part ) {
                $body[] = $part;
            }
        }

        return $this->http->delete(
                uri: $this->uri,
               body: $body,
            headers: $headers
        );
    }



/* GET METHOD LIST
---------------------------------------------------------------------------- */

    /**
     * Get all Objects
     *
     * @param int|null $id
     * @param ParamsInterface|null $params
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function get(
                    ?int $id      = null,
        ?ParamsInterface $params  = null,
                   array $headers = []
    ) : Response
    {
        $params = $params === null ? [] : $params->render();
        if( $id !== null ) {
            $this->uri .= "$id/";
        }

        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }
}