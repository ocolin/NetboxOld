<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers;

use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Models\ModelsInterface;
use Cruzio\lib\Netbox\Params\ParamsInterface;

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
            if( property_exists( $params, $key )) {
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
            if( property_exists( $data, $key )) {
                $data->set( $key, $value );
            }
        }

        return $data;
    }


/* OPTIONS CALL
----------------------------------------------------------------------------- */

    public function options() : object
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
        $data = gettype( $params ) === 'array' ? self::arrayToParam( $params, $this->params ) : $params;

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
        $output = new \stdClass();
        $data = gettype( $data ) === 'array' ? self::arrayToData( $data, $this->data ) : $data;

        try {
            $output = $this->model->post( data: $data )->body;
        }
        catch( \Exception $e ) {
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
        $output = new \stdClass();
        $data = gettype( $data ) === 'array' ? self::arrayToData( $data, $this->data ) : $data;

        try {
            $output = $this->model->put( data: $data, id: $id )->body;
        }
        catch( \Exception $e ) {
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
        $output = new \stdClass();
        $data = gettype( $data ) === 'array' ? self::arrayToData( $data, $this->data ) : $data;

        try {
            $output = $this->model->patch( data: $data, id: $id )->body;
        }
        catch( \Exception $e ) {
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
        $output = new \stdClass();
        try {
            $output = $this->model->delete( id: $id )->body;
        }
        catch( \Exception $e ) {
            $output->error = $e->getMessage();
        }

        return $output;
    }
}