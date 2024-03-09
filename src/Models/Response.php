<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models;

class Response
{
    /**
     *  @var int $status HTTP status code
     */

    public int $status;

    /**
     * @var string $status_message Status description
     */
    public string $status_message;

    /**
     * @var array<string, mixed> $headers HTTP Respone headers
     */

    public array $headers = [];

    /**
     * @var mixed $body HTTP content returned
     */

    public mixed $body;
}