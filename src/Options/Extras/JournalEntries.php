<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class JournalEntries
{
    public int    $assigned_object_id;
    public int    $created_by;

    public string $assigned_object_type;
    public string $kind;
    public string $comments;

    public array  $tags;
    public array  $custom_fields;
}