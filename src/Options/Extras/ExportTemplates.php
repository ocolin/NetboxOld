<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Options\Extras;

#[\AllowDynamicProperties]
class ExportTemplates
{
    public int    $weight;

    public string $content_type;
    public string $name;
    public string $description;
    public string $template_code;
    public string $mime_type;
    public string $file_extension;

    public bool   $as_attachment;
}