<?php

namespace Cruzio\lib\Netbox\Validation;

trait PowerOutletType
{

/*
----------------------------------------------------------------------------- */

    public static function validate_PowerOutletType( string $input ) : true|string
    {
        $allowed = [
            'iec-60320-c5',
            'iec-60320-c7',
            'iec-60320-c13',
            'iec-60320-c15',
            'iec-60320-c19',
            'iec-60320-c21',
            'iec-60309-p-n-e-4h',
            'iec-60309-p-n-e-6h',
            'iec-60309-p-n-e-9h',
            'iec-60309-2p-e-4h',
            'iec-60309-2p-e-6h',
            'iec-60309-2p-e-9h',
            'iec-60309-3p-e-4h',
            'iec-60309-3p-e-6h',
            'iec-60309-3p-e-9h',
            'iec-60309-3p-n-e-4h',
            'iec-60309-3p-n-e-6h',
            'iec-60309-3p-n-e-9h',
            'iec-60906-1',
            'nbr-14136-10a',
            'nbr-14136-20a',
            'nema-1-15r',
            'nema-5-15r',
            'nema-5-20r',
            'nema-5-30r',
            'nema-5-50r',
            'nema-6-15r',
            'nema-6-20r',
            'nema-6-30r',
            'nema-6-50r',
            'nema-10-30r',
            'nema-10-50r',
            'nema-14-20r',
            'nema-14-30r',
            'nema-14-50r',
            'nema-14-60r',
            'nema-15-15r',
            'nema-15-20r',
            'nema-15-30r',
            'nema-15-50r',
            'nema-15-60r',
            'nema-l1-15r',
            'nema-l5-15r',
            'nema-l5-20r',
            'nema-l5-30r',
            'nema-l5-50r',
            'nema-l6-15r',
            'nema-l6-20r',
            'nema-l6-30r',
            'nema-l6-50r',
            'nema-l10-30r',
            'nema-l14-20r',
            'nema-l14-30r',
            'nema-l14-50r',
            'nema-l14-60r',
            'nema-l15-20r',
            'nema-l15-30r',
            'nema-l15-50r',
            'nema-l15-60r',
            'nema-l21-20r',
            'nema-l21-30r',
            'nema-l22-30r',
            'CS6360C',
            'CS6364C',
            'CS8164C',
            'CS8264C',
            'CS8364C',
            'CS8464C',
            'ita-e',
            'ita-f',
            'ita-g',
            'ita-h',
            'ita-i',
            'ita-j',
            'ita-k',
            'ita-l',
            'ita-m',
            'ita-n',
            'ita-o',
            'ita-multistandard',
            'usb-a',
            'usb-micro-b',
            'usb-c',
            'dc-terminal',
            'hdot-cx',
            'saf-d-grid',
            'neutrik-powercon-20a',
            'neutrik-powercon-32a',
            'neutrik-powercon-true1',
            'neutrik-powercon-true1-top',
            'ubiquiti-smartpower',
            'hardwired',
            'other'
        ];

        if( !in_array( $input, $allowed )) {
            return "OutletType '{$input}' Not a valid Power Outlet type.";
        }

        return true;
    }
}
