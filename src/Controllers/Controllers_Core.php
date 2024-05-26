<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers;

use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Models\ModelsInterface;
use Cruzio\lib\Netbox\Params\ParamsInterface;
use Exception;
use stdClass;

class Controllers_Core
{
    protected ModelsInterface $model;
    protected ParamsInterface $params;
    protected DataInterface   $data;

/* CONVERT ARRAY TO PARAMETER OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param array<string, string|int|float|array<string|int|float>> $array
     * @param ParamsInterface $params
     * @return ParamsInterface
     */
    public static function arrayToParam( array $array, ParamsInterface $params ) : ParamsInterface
    {
        foreach( $array as $key => $value )
        {
            if( property_exists( $params, property: $key ) OR str_starts_with( $key, 'cf_' )) {
                $params->set( $key, $value );
            }
        }

        return $params;
    }



/* CONVERT ARRAY TO DATA OBJECT
----------------------------------------------------------------------------- */

    /**
     * @param array<string, string|int|float> $array
     * @param DataInterface $data
     * @return DataInterface
     */
    public static function arrayToData( array $array, DataInterface $data ) : DataInterface
    {
        foreach( $array as $key => $value )
        {
            if( property_exists( $data, property: $key )) {
                // Allow array to be used for custom fields
                if( $key === 'custom_fields' ) {
                    $value = (object)$value;
                }
                $data->set( $key, $value );
            }
        }

        return $data;
    }


/* OPTIONS CALL
----------------------------------------------------------------------------- */

    /**
     * @return object|array<object>|null
     */
    public function options() : object|array|null
    {
        return $this->model->options()->body;
    }



/* GET CALL
----------------------------------------------------------------------------- */

    /**
     * @param ParamsInterface|array<string, int|float|string|array<int|float|string>>|null $params
     * @param int|null $id
     * @return object|array<string, mixed>|null
     */
    public function get( ParamsInterface|array $params = null, int $id = null ): object|array|null
    {
        $data = is_array( value: $params ) ? self::arrayToParam(
             array: $params,
            params: $this->params
        ) : $params;

        return $this->model->get( id: $id, params: $data )->body;
    }



/* POST CALL
----------------------------------------------------------------------------- */

    /**
     * @param DataInterface|array<string, string|int|float> $data
     * @return object|array<string, mixed>|null
     */
    public function create( DataInterface|array $data ) : object|array|null
    {
        $output = new stdClass();
        $data = is_array( value: $data ) ? self::arrayToData(
            array: $data,
             data: $this->data
        ) : $data;

        try {
            $output = $this->model->post( data: $data )->body;
        }
        catch( Exception $e ) {
            $output->error = $e->getMessage();
        }

        return $output;
    }


/* PUT CALL
----------------------------------------------------------------------------- */

    /**
     * @param DataInterface|array<string, string|int|float> $data
     * @param int|null $id
     * @return object|array<string, mixed>|null
     */
    public function replace( DataInterface|array $data, int $id = null ) : object|array|null
    {
        $output = new stdClass();
        $data = is_array( $data ) ? self::arrayToData( array: $data, data: $this->data ) : $data;

        try {
            $output = $this->model->put( data: $data, id: $id )->body;
        }
        catch( Exception $e ) {
            $output->error = $e->getMessage();
        }

        return $output;
    }


/* PATCH CALL
----------------------------------------------------------------------------- */

    /**
     * @param DataInterface|array<string, string|int|float> $data
     * @param int|null $id
     * @return object|array<string, mixed>|null
     */
    public function update( DataInterface|array $data, int $id = null ) : object|array|null
    {
        $output = new stdClass();
        $data = is_array( $data ) ? self::arrayToData( array: $data, data: $this->data ) : $data;

        try {
            $output = $this->model->patch( data: $data, id: $id )->body;
        }
        catch( Exception $e ) {
            $output->error = $e->getMessage();
        }

        return $output;
    }



/* DELETE CALL
----------------------------------------------------------------------------- */

    /**
     * @param int $id
     * @return object|array<string, mixed>|null
     */
    public function delete( int $id ) : object|array|null
    {
        $output = new stdClass();
        try {
            $output = $this->model->delete( id: $id )->body;
        }
        catch( Exception $e ) {
            $output->error = $e->getMessage();
        }

        return $output;
    }
}