<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Types;

class CableStatus
{

    /**
     * @var array<string>
     */
    
    private array $allowed_values = [
        'connected',
        'planned',
        'decommissioning'
    ];

    //private string $value;

    public function __construct( string $value )
    {
        if( !in_array( $value, $this->allowed_values )) {
            // THROW EXCEPTION
        }

        //$this->value = $value;
    }

    // function to get data
    // function to update data
    // functions in parent?

}