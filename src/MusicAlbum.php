<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A collection of music tracks.
 */
class MusicAlbum extends MusicPlaylist
{
    /**
     * Classification of the album by it's type of content: soundtrack, live album,
     * studio album, etc.
     */
    private $albumProductionType;

    /**
     * The artist that performed this album or recording.
     */
    private $byArtist;

    /**
     * The kind of release which this album is: single, EP or album.
     */
    private $albumReleaseType;

    /**
     * A release of this album.
     */
    private $albumRelease;

    public function getAlbumProductionType()
    {
        return $this->albumProductionType;
    }

    public function setAlbumProductionType($albumProductionType)
    {
        $this->albumProductionType = $albumProductionType;
    }

    public function getByArtist()
    {
        return $this->byArtist;
    }

    public function setByArtist($byArtist)
    {
        $this->byArtist = $byArtist;
    }

    public function getAlbumReleaseType()
    {
        return $this->albumReleaseType;
    }

    public function setAlbumReleaseType($albumReleaseType)
    {
        $this->albumReleaseType = $albumReleaseType;
    }

    public function getAlbumRelease()
    {
        return $this->albumRelease;
    }

    public function setAlbumRelease($albumRelease)
    {
        $this->albumRelease = $albumRelease;
    }
}

