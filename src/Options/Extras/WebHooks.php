<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class Webhooks
{
    public string $name;
    public string $payload_url;
    public string $http_method;
    public string $http_content_type;
    public string $additional_headers;
    public string $body_template;
    public string $secret;
    public string $conditions;
    public string $ca_file_path;

    public bool   $type_create;
    public bool   $type_update;
    public bool   $type_delete;
    public bool   $enabled;
    public bool   $ssl_verification;

    /**
     * @var array<string>
     */
    
    public array  $content_types;
}