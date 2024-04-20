<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;

class ExportTemplates extends Data_Core implements DataInterface
{ 
    /**
     * @var array<string> $content_types
     */
    protected array  $content_types;
    protected string $name;
    protected string $description; // Max: 200
    protected string $template_code; //  Jinja2 template code. The list of objects being exported is passed as a context variable named <code>queryset</code>.
    protected string $mime_type; // Defaults to <code>text/plain; charset=utf-8</code>
    protected string $file_extension; // Extension to append to the rendered filename
    protected bool   $as_attachment;
    protected int    $data_source; // Class
    protected string $data_synced; // Datedime


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $data_path;
    protected int    $data_file; // Class



/* REQUIRED PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function required() : array
    {
        return [ 'content_types', 'name', 'template_code' ];
    }



/* READ ONLY PARAMETERS
----------------------------------------------------------------------------- */

/**
 *  @return array<string> 
 */

    public static function readonly() : array
    {
        return [
            'id',
            'url',
            'display',
            'created',
            'last_updated',
            'data_path'
        ];
    }
}

/* DATA EXAMPLE
----------------------------------------------------------------------------- */

/**
{
  "content_types": [
    "string"
  ],
  "name": "string",
  "description": "string",
  "template_code": "string",
  "mime_type": "string",
  "file_extension": "string",
  "as_attachment": true,
  "data_source": 0
}
 */