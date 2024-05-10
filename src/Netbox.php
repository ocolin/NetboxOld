<?php

declare( strict_types = 1);

namespace Cruzio\lib\Netbox;

require_once __DIR__ . '/../vendor/autoload.php';

use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Params\ParamsInterface;

/**
 * @author Colin Miller
 * @copyright 2024
 * @license MIT
 * @version 1.0
 *
 *
 */

class Netbox
{

/* CREATE
----------------------------------------------------------------------------- */

 /**
 * CREATE:
 *  Arguments
 *      module - Path to module. Example: DCIM\Sites
 *      data - Enter data two ways, via array or Data object
 *          array - An associative array of parameter names and values
 *          DataInterface - a data object using the Data classes
 *
 * @example:
 *      $module = Netbox::create(
 *          module: 'DCIM\Sites',
 *          data: [ 'name' => 'mySite, 'slug' => 'mySlug' ]
 *      );
  *
  * @param string $module Name of module to use
  * @param DataInterface|array<string, string|int|float> $data Data for creating module.
  *
 */

    public static function create( string $module, DataInterface|array $data ) : object
    {
        $o = self::controller( module: $module );

        /** @phpstan-ignore-next-line */
        return $o->create( data: $data );
    }



/* DELETE
----------------------------------------------------------------------------- */

/**
    arguments
        module - Path to module. Example: DCIM\Sites
        data - Enter data two ways, via array or Data object
        id - Optional id value. Without this, updates every object that matches
            and with the id, it updates only object with that id

    @example - delete a site:
        $module = Netbox::delete(
            module: 'DCIM\Sites',
            id: 1234
        );
*/

    public static function delete( string $module, int $id ) : object
    {
        $o = self::controller( module: $module );

        /** @phpstan-ignore-next-line */
        return $o->delete( id: $id );
    }



/* GET
----------------------------------------------------------------------------- */
/**
  arguments
      module - Path to module. Example: DCIM\Sites
      data - Enter data two ways, via array or Params object
          array - An associative array of parameter names and values
          ParamsInterface - Use a Params class object
          id - Optional id value. Without this, gets every object that matches
              and with the id, it gets only object with that id

  @example 1 - get all sites:
      $module = Netbox::get(
           module: 'DCIM\Sites'
       );

  @example 2 - Get a site by id:
      $module = Netbox::get(
            module: 'DCIM\Sites',
            id: 1234
      );
 *
 * @param string $module namespace and name of module to load
 * @param null|ParamsInterface|array<string, string|int|float> $data
 * @param null|int $id Optional ID to get specific module
 * @return object
*/

    public static function get(
        string $module,
        ParamsInterface|array|null $data = null,
        ?int $id = null
    ) : object
    {
        $o = self::controller( module: $module );

        /** @phpstan-ignore-next-line */
        return $o->get( params: $data, id: $id );
    }



/* REPLACE
----------------------------------------------------------------------------- */

 /**
    * arguments
        * module - Path to module. Example: DCIM\Sites
        * data - Enter data two ways, via array or Data object
            * array - An associative array of parameter names and values
            * DataInterface - Use a Data class object
        * id - Optional id value. Without this, updates every object that matches
                * and with the id, it updates only object with that id
 *
* @example - replace a site:
        * $module = Netbox::replace(
           * module: 'DCIM\Sites',
           * data: [ 'name' => 'newName', 'slug' => 'newSlug' ],
           * id: 1234
   );
  *
  * @param string $module namespace and name of module to load
  * @param DataInterface|array<string, string|int|float> $data
  * @param null|int $id Optional ID to get specific module
  * @return object
*/

    public static function replace(
        string $module,
        DataInterface|array
        $data,
        ?int $id = null
    ) : object
    {
        $o = self::controller( module: $module );

        /** @phpstan-ignore-next-line */
        return $o->replace( data: $data, id: $id );
    }



/* UPDATE
----------------------------------------------------------------------------- */

/**
arguments
    module - Path to module. Example: DCIM\Sites
    data - Enter data two ways, via array or Data object
        array - An associative array of parameter names and values
        DataInterface - Use a Data class object
    id - Optional id value. Without this, updates every object that matches
        and with the id, it updates only object with that id

@example - update a site:
       $module = Netbox::update(
          module: 'DCIM\Sites',
          data: [ 'name' => 'newName' ],
          id: 1234
        );
 *
 * @param string $module Namespace and name of module to load
 * @param DataInterface|array<string, string|int|float> $data data to send to query
 * @param int|null $id Optional ID to specify individual object
 * @return object
*/

    public static function update(
        string $module,
        DataInterface|array $data,
        ?int $id = null
    ) : object
    {
        $o = self::controller( module: $module );

        /** @phpstan-ignore-next-line */
        return $o->update( data: $data, id: $id );
    }



/* OPTIONS
----------------------------------------------------------------------------- */

    public static function options( string $module ) : object
    {
        $o = self::controller( module: $module );

        /** @phpstan-ignore-next-line */
        return $o->options();
    }



/* CREATE CONTROLLER
----------------------------------------------------------------------------- */

    /**
     * Create a controller
     *
     * @param string $module Long name of the module class
     * @return object
     */
    public static function controller( string $module ) : object
    {
        $module = "Cruzio\\lib\\Netbox\\Controllers\\" . $module;

        return new $module();
    }


/* CREATE MODEL
----------------------------------------------------------------------------- */

    /**
     * Create a model
     *
     * @param string $module Long name of model
     * @return object
     */
    public static function model( string $module ) : object
    {
        $module = "Cruzio\\lib\\Netbox\\Models\\" . $module;

        return new $module();
    }

}