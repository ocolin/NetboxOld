<?php

namespace Cruzio\lib\Netbox\Validation;

trait ContactContentTypes
{

/* 
----------------------------------------------------------------------------- */

    public static function validate_ContentTypes( string $input ) : true|string
    {
        $allowed = [ 
            'circuits.circuit',
            'circuits.provider',
            'dcim.device',
            'dcim.location',
            'dcim.manufacturer',
            'dcim.powerPanel',
            'dcim.rack',
            'dcim.region',
            'dcim.site',
            'dcim.siteGroup',
            'tenancy.tenant',
            'virtualization.cluster',
            'virtualization.clusterGroup',
            'virtualization.virtualMachine'
        ];
        if( !in_array( $input, $allowed )) {
            $combined = implode( ', ', $allowed );
            return "ContactPriority '{$input}' must be of type: {$combined}.";
        }

        return true;
    }

}