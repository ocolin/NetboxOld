<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\Extras\ImageAttachments AS Options;

class ImageAttachments extends Extras_Core
{
    protected Options $options;

    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'image-attachments/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Attachment.
*
* @param string  $content_type Image file format.
* @param integer $object_id 
* @param integer $image_height Hieght of image.
* @param integer $image_width Width of image.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $content_type,
           int $object_id,
           int $image_height,
           int $image_width,
        string $image,
       Options $options = null,
         array $headers = [ 'Content-type' => 'multipart/form-data' ]
    ) : array
    {
        $options = $options ?? $this->options;
        
        $options->content_type  = $content_type;
        $options->object_id     = $object_id;
        $options->image_height  = $image_height;
        $options->image_width   = $image_width;
        $options->image         = $image;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Attachment
* 
* @param integer $id Numerical ID of Context to update.
* @param string  $content_type Image file format.
* @param integer $object_id 
* @param integer $image_height Hieght of image.
* @param integer $image_width Width of image.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $content_type,
           int $object_id,
           int $image_height,
           int $image_width,
        string $image,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_type  = $content_type;
        $options->object_id     = $object_id;
        $options->image_height  = $image_height;
        $options->image_width   = $image_width;
        $options->image         = $image;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Attachment value(s).
*
* @param integer $id Numerical ID of Context to update.
* @param string  $content_type Image file format.
* @param integer $object_id 
* @param integer $image_height Hieght of image.
* @param integer $image_width Width of image.
* @param Options $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $content_type,
           int $object_id,
           int $image_height,
           int $image_width,
        string $image,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->content_type  = $content_type;
        $options->object_id     = $object_id;
        $options->image_height  = $image_height;
        $options->image_width   = $image_width;
        $options->image         = $image;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
