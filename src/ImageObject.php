<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An image file.
 */
class ImageObject extends MediaObject
{
    /**
     * The caption for this object. For downloadable machine formats (closed caption,
     * subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
     */
    private $caption;

    /**
     * exif data for this object.
     */
    private $exifData;

    /**
     * Thumbnail image for an image or video.
     */
    private $thumbnail;

    /**
     * Indicates whether this image is representative of the content of the page.
     */
    private $representativeOfPage;

    public function getCaption()
    {
        return $this->caption;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    public function getExifData()
    {
        return $this->exifData;
    }

    public function setExifData($exifData)
    {
        $this->exifData = $exifData;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    public function getRepresentativeOfPage()
    {
        return $this->representativeOfPage;
    }

    public function setRepresentativeOfPage($representativeOfPage)
    {
        $this->representativeOfPage = $representativeOfPage;
    }
}

