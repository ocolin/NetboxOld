<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\IPAM;

#[\AllowDynamicProperties]
class VlanGroups
{
    public int    $scope_id;
    public int    $min_vid;
    public int    $max_vid;
    
    public string $name;
    public string $slug;
    public string $scope_type;
    public string $description;

    public array  $tags;
    public array  $custom_fields;
}