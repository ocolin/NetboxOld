<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\IPAM;

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

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}