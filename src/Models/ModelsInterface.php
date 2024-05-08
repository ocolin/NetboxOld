<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models;

use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Params\ParamsInterface;
use Cruzio\lib\Netbox\Data\DataInterface;

Interface ModelsInterface
{
    /**
     * @param array<string, string> $headers
     * @return \Cruzio\lib\Netbox\Models\Response
     */
    public function options( array $headers = [] ) : Response;

    /**
     * @param DataInterface $data
     * @param array<string, string> $headers
     * @param array<string, int|float|string|array<int|float|string>> $params
     * @return \Cruzio\lib\Netbox\Models\Response
     */
    public function post( DataInterface $data, array $headers = [], array $params = [] ) : Response;

    /**
     * @param DataInterface $data
     * @param null|int $id
     * @param array<string, string> $headers
     * @param array<string, int|float|string|array<int|float|string>> $params
     * @return \Cruzio\lib\Netbox\Models\Response
     */
    public function put( DataInterface $data, int $id = null, array $headers = [], array $params = [] ) : Response;

    /**
     * @param DataInterface $data
     * @param int|null $id
     * @param array<string, string> $headers
     * @param array<string, int|float|string|array<int|float|string>> $params
     * @return \Cruzio\lib\Netbox\Models\Response
     */
    public function patch( DataInterface $data, int $id = null, array $headers = [], array $params = [] ) : Response;

    /**
     * @param int $id
     * @param array<string, string> $headers
     * @param array<string, int|float|string|array<int|float|string>> $params
     * @return \Cruzio\lib\Netbox\Models\Response
     */
    public function delete( int $id, array $headers = [], array $params = [] ) : Response;

    /**
     * @param int|null $id
     * @param ParamsInterface|null $params
     * @param array<string, string> $headers
     * @return mixed
     */
    public function get( int $id = null, ParamsInterface $params = null, array $headers = [] ) : Response;
}