<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class ExportTemplates
{
    public int    $weight;

    /**
     * @var array<string>
     */
    
    public array  $content_types;

    public string $name;
    public string $description;
    public string $template_code;
    public string $mime_type;
    public string $file_extension;

    public bool   $as_attachment;
}