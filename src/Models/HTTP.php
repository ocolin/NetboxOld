<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\ResponseInterface;
use Ocolin\Env\EasyEnv;

class HTTP
{
    private Client $client;

    /**
     * @var array<string, string>
     */

    private array $headers;

    /**
     * @var string $base_uri Beginning URL of request
     */

    private string $base_uri;

/*
---------------------------------------------------------------------------- */

    /**
     * @param ?Client $client
     * @param ?string $base_uri
     * @param boolean $verify
     * @param boolean $errors
     * @throws Exception
     */

    public function __construct(
        ?Client $client = null,
        ?string $base_uri = null,
           bool $verify = false,
           bool $errors = false
    )
    {
        if( empty( $_ENV['NETBOX_BASE_URI']) or empty( $_ENV['NETBOX_TOKEN'] )) {
            EasyEnv::loadEnv( path: __DIR__ . '/../../.env' );
        }

        $this->base_uri = $base_uri ?? $_ENV['NETBOX_BASE_URI'];
        $this->headers  = self::default_Headers();
        $this->client   = $client ?? new Client([
            'base_uri'        => $this->base_uri,
            'verify'          => $verify,
            'http_errors'     => $errors,
            'timeout'         => 10,
            'connect_timeout' => 10
        ]);
    }



/* POST METHOD
---------------------------------------------------------------------------- */

    /**
     * Create an object.
     *
     * @param string $uri
     * @param array<object>|object|null $body
     * @param array<string, string> $params
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function post(
              string $uri,
   array|object|null $body,
               array $params  = [],
               array $headers = []
    ) : Response
    {
        $uri = self::formatParams( params: $params, uri: $uri );
        $this->headers = array_merge( $this->headers, $headers );

        $request = $this->client->request(
             method: 'POST',
                uri: $uri,
            options: [
                'headers' => $this->headers,
                'body'    => json_encode( value: $body )
            ]
        );

        return self::returnResults( request: $request );
    }



/* PUT METHOD
---------------------------------------------------------------------------- */

    /**
     * Modify an existing object. Requires all mandatory fields to be specified.
     *
     * @param string $uri
     * @param array<string, mixed>|object $body
     * @param array<string, string> $params
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function put(
              string $uri,
   array|object|null $body,
               array $params  = [],
               array $headers = []
    ) : Response
    {
        $uri = self::formatParams( params: $params, uri: $uri );
        $this->headers = array_merge( $this->headers, $headers );
        $request = $this->client->request(
             method: 'PUT',
                uri: $uri,
            options: [
                'headers' => $this->headers,
                'body'    => json_encode( value: $body )
            ]
        );

        return self::returnResults( request: $request );
    }



/* PATCH METHOD
---------------------------------------------------------------------------- */

    /**
     * Modify an existing object. Only fields to be modified are specified
     *
     * @param string $uri
     * @param array<string, mixed>|object $body
     * @param array<string, string> $params
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function patch(
              string $uri,
   array|object|null $body,
               array $params  = [],
               array $headers = []
    ) : Response
    {
        $uri = self::formatParams( params: $params, uri: $uri );
        $this->headers = array_merge( $this->headers, $headers );
        $request = $this->client->request(
            'PATCH', $uri, [
                'headers' => $this->headers,
                'body'    => json_encode( value: $body )
            ]
        );

        return self::returnResults( request: $request );
    }



/* GET METHOD
---------------------------------------------------------------------------- */

    /**
     * Retrieve an object or list of objects.
     *
     * @param string $uri
     * @param array<string, string|int|float|array<int|float|string>> $params
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function get(
        string $uri,
         array $params  = [],
         array $headers = []
    ) : Response
    {
        $this->headers = array_merge( $this->headers, $headers );

        $request = $this->client->request(
            method: 'GET',
            uri: $uri,
            options: [ 'headers' => $this->headers, 'query' => Query::build( $params )]
        );

        return self::returnResults( request: $request );
    }



/* DELETE METHOD
---------------------------------------------------------------------------- */

    /**
     * Delete an existing object.
     *
     * @param string $uri
     * @param array<object> $body
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function delete(
        string $uri,
         array $body = [],
         array $headers = []
    ) : Response
    {
        $this->headers = array_merge( $this->headers, $headers );
        $request = $this->client->request(
            'DELETE', $uri, [ 
                'headers' => $this->headers,
                   'body' => json_encode( $body )
            ]
        );

        return self::returnResults( request: $request );
    }



/* OPTIONS METHOD
---------------------------------------------------------------------------- */

    /**
     * Inspect a particular REST API endpoint and return all supported actions
     *  and their available parameters.
     *
     * @param string $uri
     * @param array<string, string> $headers HTML request headers
     * @return Response
     * @throws GuzzleException
     */

    public function options( string $uri, array $headers = [] ) : Response
    {
        $this->headers = array_merge( $this->headers, $headers );
        $request = $this->client->request(
            'OPTIONS', $uri, [ 'headers' => $this->headers ]
        );

        return self::returnResults( request: $request );
    }



/* DEFAULT SEND HEADERS
---------------------------------------------------------------------------- */

/**
 * Generate a default set of headers so none are needed for most queries. Includes
 *  the authentication token which can be overridden with each call if specified.
 *
 *  @return array<string, string> Array of HTTP request headers
*/

    private static function default_Headers() : array
    {
        return [
            'Authorization' => 'Token ' . $_ENV['NETBOX_TOKEN'],
             'Content-type' => 'application/json; charset=utf-8',
               'User-Agent' => 'Netbox API Client 1.0',
        ];
    }



/* FORMAT RESPONSE
---------------------------------------------------------------------------- */

    /**
     * Format the Guzzle HTTP request response into an array
     *
     * @param ResponseInterface $request
     * @return Response
     */

    private static function returnResults( ResponseInterface $request ) : Response
    {
        $response = new Response();
        $response->status = $request->getStatusCode();
        $response->status_message = $request->getReasonPhrase();
        $response->headers = $request->getHeaders();
        $response->body = json_decode( $request->getBody()->getContents() );

        return $response;
    }



/* FORMAT URL PARAMETERS
---------------------------------------------------------------------------- */

/**
 * Format an array of parameters into a URL query
 *
 * @param array<string, string> $params
 * @param string $uri
 * @return string final URI with parameters encoded into it, or plain uri.
*/

    private static function formatParams( array $params, string $uri ) : string
    {
        if( empty( $params )) { return $uri; }

        return $uri . '?' . http_build_query( $params );
    }
}
