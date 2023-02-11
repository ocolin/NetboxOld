<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Tenancy;

#[\AllowDynamicProperties]
class ContactAssignments
{
    public int    $object_id;
    public int    $contact;
    public int    $role;
    
    public string $content_type;
    public string $priority;
}