<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models;

use Symfony\Component\Dotenv\Dotenv;

require_once( __DIR__ . '/../../vendor/autoload.php' );

class testCore extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        $dotenv = new Dotenv();
        $dotenv->load( __DIR__ . '/../.env' );
        parent::__construct();
    }
}
