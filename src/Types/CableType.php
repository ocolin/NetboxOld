<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Types;

class CableType
{

    /**
     * @var array<string>
     */
    
    private array $allowed_values = [
        'cat3',
        'cat5',
        'cat5e',
        'cat6',
        'cat6a',
        'cat7',
        'cat7a',
        'cat8',
        'dac-active',
        'om4',
        'mmf-om5',
        'smf',
        'smf-os1',
        'smf-os2',
        'aoc',
        'power'
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