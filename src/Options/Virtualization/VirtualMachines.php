<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Virtualization;

#[\AllowDynamicProperties]
class VirtualMachines
{
    public int    $cluster;
    public int    $role;
    public int    $tenant;
    public int    $platform;
    public int    $primary_ip4;
    public int    $primary_ip6;
    public int    $memory;
    public int    $disk;

    public float  $vcpus;

    public string $name;
    public string $status;
    public string $comments;
    public string $local_context_data;

    public bool   $enabled;

    public array  $tags;
    public array  $custom_fields;
}