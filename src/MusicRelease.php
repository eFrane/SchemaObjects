<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A MusicRelease is a specific release of a music album.
 */
class MusicRelease extends MusicPlaylist
{
    /**
     * The label that issued the release.
     */
    private $recordLabel;

    /**
     * The group the release is credited to if different than the byArtist. For
     * example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady
     * Gaga.
     */
    private $creditedTo;

    /**
     * The catalog number for the release.
     */
    private $catalogNumber;

    /**
     * Format of this release (the type of recording media used, ie. compact disc,
     * digital media, LP, etc.).
     */
    private $musicReleaseFormat;

    /**
     * The album this is a release of.
     */
    private $releaseOf;

    public function getRecordLabel()
    {
        return $this->recordLabel;
    }

    public function setRecordLabel($recordLabel)
    {
        $this->recordLabel = $recordLabel;
    }

    public function getCreditedTo()
    {
        return $this->creditedTo;
    }

    public function setCreditedTo($creditedTo)
    {
        $this->creditedTo = $creditedTo;
    }

    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    public function setCatalogNumber($catalogNumber)
    {
        $this->catalogNumber = $catalogNumber;
    }

    public function getMusicReleaseFormat()
    {
        return $this->musicReleaseFormat;
    }

    public function setMusicReleaseFormat($musicReleaseFormat)
    {
        $this->musicReleaseFormat = $musicReleaseFormat;
    }

    public function getReleaseOf()
    {
        return $this->releaseOf;
    }

    public function setReleaseOf($releaseOf)
    {
        $this->releaseOf = $releaseOf;
    }
}

