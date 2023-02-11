<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\DCIM;

#[\AllowDynamicProperties]
class PowerFeeds
{
    public int    $power_panel;
    public int    $rack;
    public int    $voltage;
    public int    $amperage;
    public int    $max_utilization;

    public string $name;
    public string $status;
    public string $type;
    public string $supply;
    public string $phase;
    public string $comments;

    public bool   $mark_connected;

    public object $cable;

    public array  $tags;
    public array  $custom_fields;
}