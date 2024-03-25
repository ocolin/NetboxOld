<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models;

require_once( __DIR__ . '/../../vendor/autoload.php' );
//require_once( __DIR__ . '/../mode.php' );

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Data\DataInterface;


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
    public static function autoOptions( $class, array $optionsArray ) : object
    {
        $class = str_replace( 'Models', 'Options', $class );
        $options = new $class();
        foreach( $optionsArray as $key => $value )
        {
            if( property_exists( $options, $key )) {
                $options->$key = $value;
            }
        }

        return $options;
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Platform.
*
* @param  DataInterface $data optionsl data to be sent.
* @param  array<string, string> $headers HTML request headers
* @param  array<string, string> $params URL Parameters
* @return Response
*/

    public function postDetail(
          DataInterface $data,
         array $headers = [],
         array $params = [],
    ) : Response
    {
        return $this->http->post(
                uri: $this->uri,
               body: $data->render( required: true ),
            headers: $headers,
             params: $params
        );
    }


/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Site
* 
* @param  integer $id Numerical ID of Site to update.
* @param  DataInterface $data Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @param  array<string, string> $params URL Parameters
* @return Response
*/

    public function putDetail(
           int $id,
          DataInterface $data,
         array $headers = [],
         array $params = []
    ) : Response
    {
        $this->uri .= "{$id}/";

        return $this->http->put(
                uri: $this->uri,
               body: $data->render(),
            headers: $headers,
             params: $params
        );
    }


/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Site value(s).
*
* @param  integer $id Numerical ID of Site to update.
* @param  DataInterface $data Optional data to send.
* @param  array<string, string> $headers HTML request headers
* @param  array<string, string> $params URL Parameters
* @return Response
*/

    public function patchDetail(
           int $id,
          DataInterface $data,
         array $headers = [],
         array $params = []
    ) : Response
    {
        $this->uri .= "{$id}/";

        return $this->http->patch(
                uri: $this->uri,
               body: $data->render(),
            headers: $headers,
             params: $params
        );
    }

    
/* OPTIONS METHOD
---------------------------------------------------------------------------- */

/**
* List details about API call.
*
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function options( array $headers = [] ) : Response
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }



/* DELETE METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Delete an individual object.
* 
* @param  integer $id A unique integer value identifying an object.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function deleteDetail( int $id, array $headers = [] ) : Response
    {
        $this->uri .= "{$id}/";

        return $this->http->delete( uri: $this->uri, headers: $headers );
    }



/* DELETE METHOD LIST
---------------------------------------------------------------------------- */

/**
* Delete a list of objects.
* 
* @param  array<string, string> $options List of object to delete. Each object must have an ID.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function deleteList( 
        array $options, 
        array $headers = [] 
    ) : Response
    {
        return $this->http->delete( 
                uri: $this->uri, 
               body: $options, 
            headers: $headers 
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update a list of objects.
*
* @param  array<string, string> $options Array of Objects to update.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function patchList(
        array $options    = [],
        array $headers = []
    ) : Response
    {
        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/**
* Updte an array of object.
*
* @param  array<string, string> $options List of objects to update.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function putList(
        array $options,
        array $headers = []
    ) : Response
    {
        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* GET METHOD LIST
---------------------------------------------------------------------------- */

/**
* Get all Objects
*
* @param  array<string, string> $params Optional URL parameters.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function getList( 
        array $params  = [], 
        array $headers = [] 
    ) : Response
    {

        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }


/* POST METHOD LIST
---------------------------------------------------------------------------- */

/**
* Create multiple objects at once.
*
* @param  array<string, string> $options An array of object arrays. Each sub array MUST have a 
*  name and slug key. 
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function postList(
        array $options,
        array $headers = []
    ) : Response
    {
        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }


 /* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Get an individual object
*
* @param integer $id Numerical ID of an object record.
* @param array<string, string> $params Optional GET parameters.
* @param  array<string, string> $headers HTML request headers
* @return Response
*/

    public function getDetail( 
          int $id, 
        array $params  = [], 
        array $headers = [] 
    ) : Response
    {
        $this->uri .= "{$id}/";

        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }
}