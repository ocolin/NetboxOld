<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Data\Extras;

use Cruzio\lib\Netbox\Data\Data_Core;
use Cruzio\lib\Netbox\Data\DataInterface;
use Cruzio\lib\Netbox\Validation;

class ExportTemplates extends Data_Core implements DataInterface
{ 
    /**
     * @var array<string> $content_types
     * REQUIRED
     * List of content types
     */
    protected array  $content_types;

    /**
     * @var string $name
     * REQUIRED
     * Name of template
     */
    protected string $name;

    /**
     * @var string $description
     * Long description
     */
    protected string $description;

    /**
     * @var string $template_code
     * REQUIRED
     * Jinja2 template code. The list of objects
     * being exported is passed as a context variable
     * named <code>queryset</code>.
     */
    protected string $template_code;

    /**
     * @var string $mime_type
     * Defaults to <code>text/plain; charset=utf-8</code>
     */
    protected string $mime_type;

    /**
     * @var string $file_extension
     * Extension to append to the rendered filename
     */
    protected string $file_extension;

    /**
     * @var bool $as_attachment
     * Download file as attachment
     */
    protected bool $as_attachment;

    protected string $data_synced; // Datedime


    // READ ONLY
    protected int    $id;
    protected string $url;
    protected string $display;
    protected string $created;
    protected string $last_updated;
    protected string $data_path;
    protected int    $data_file;
    protected int    $data_source;



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


/* VALIDATE PARAMETERS
----------------------------------------------------------------------------- */

    /**
     *  @return array<string, array<string|int>>
     */

    public static function validate() : array
    {
        return [
            'name'              => [ 'MaxString', 100 ],
            'description'       => [ 'MaxString', 200 ],
            'mime_type'         => [ 'MaxString', 50 ],
            'file_extension'    => [ 'MaxString', 15 ],


            'weight'        => [ 'RangeInt', 0, 32767 ],
            'group_name'    => [ 'MaxString', 50 ],
        ];
    }

    use Validation\ButtonClass;
    use Validation\MaxString;
    use Validation\RangeInt;
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