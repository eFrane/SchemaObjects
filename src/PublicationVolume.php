<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A part of a successively published publication such as a periodical or
 * multi-volume work, often numbered. It may represent a time span, such as a year.
 *
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 */
class PublicationVolume extends CreativeWork
{
    /**
     * Identifies the volume of publication or multi-part work; for example, "iii" or
     * "2".
     */
    private $volumeNumber;

    /**
     * The page on which the work ends; for example "138" or "xvi".
     */
    private $pageEnd;

    public function getVolumeNumber()
    {
        return $this->volumeNumber;
    }

    public function setVolumeNumber($volumeNumber)
    {
        $this->volumeNumber = $volumeNumber;
    }

    public function getPageEnd()
    {
        return $this->pageEnd;
    }

    public function setPageEnd($pageEnd)
    {
        $this->pageEnd = $pageEnd;
    }
}

