<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Tenancy;

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

    /**
     * @var array<string>
     */
    
    public array  $tags;

    /**
     * @var array<string>
     */
    
    public array  $custom_fields;
}