<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Tenancy;

#[\AllowDynamicProperties]
class Contacts
{
    public int    $group;

    public string $name;
    public string $title;
    public string $phone;
    public string $email;
    public string $address;
    public string $link;
    public string $comments;

    public array  $tags;
    public array  $custom_fields;
}