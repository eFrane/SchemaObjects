<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The term "story" is any indivisible, re-printable
 *     	unit of a comic, including the interior stories, covers, and backmatter.
 * Most
 *     	comics have at least two stories: a cover (ComicCoverArt) and an interior
 * story.
 */
class ComicStory extends CreativeWork
{
    /**
     * The individual who traces over the pencil drawings in ink after pencils are
     * complete.
     */
    private $inker;

    /**
     * The primary artist for a work
     *     	in a medium other than pencils or digital line art--for example, if the
     *     	primary artwork is done in watercolors or digital paints.
     */
    private $artist;

    /**
     * The individual who draws the primary narrative artwork.
     */
    private $penciler;

    public function getInker()
    {
        return $this->inker;
    }

    public function setInker($inker)
    {
        $this->inker = $inker;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    public function getPenciler()
    {
        return $this->penciler;
    }

    public function setPenciler($penciler)
    {
        $this->penciler = $penciler;
    }
}

