<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A HyperToc represents a hypertext table of contents for complex media objects,
 * such as [[VideoObject]], [[AudioObject]]. Items in the table of contents are
 * indicated using the [[tocEntry]] property, and typed [[HyperTocEntry]]. For
 * cases where the same larger work is split into multiple files,
 * [[associatedMedia]] can be used on individual [[HyperTocEntry]] items.
 */
class HyperToc extends CreativeWork
{
    /**
     * A media object that encodes this CreativeWork. This property is a synonym for
     * encoding.
     */
    private $associatedMedia;

    /**
     * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
     */
    private $tocEntry;

    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    public function setAssociatedMedia($associatedMedia)
    {
        $this->associatedMedia = $associatedMedia;
    }

    public function getTocEntry()
    {
        return $this->tocEntry;
    }

    public function setTocEntry($tocEntry)
    {
        $this->tocEntry = $tocEntry;
    }
}

