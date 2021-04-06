<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo
 * musician.
 */
class MusicGroup extends PerformingGroup
{
    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or Ringo.
     */
    private $musicGroupMember;

    /**
     * A collection of music albums.
     */
    private $albums;

    /**
     * A music album.
     */
    private $album;

    /**
     * Genre of the creative work, broadcast channel or group.
     */
    private $genre;

    public function getMusicGroupMember()
    {
        return $this->musicGroupMember;
    }

    public function setMusicGroupMember($musicGroupMember)
    {
        $this->musicGroupMember = $musicGroupMember;
    }

    public function getAlbums()
    {
        return $this->albums;
    }

    public function setAlbums($albums)
    {
        $this->albums = $albums;
    }

    public function getAlbum()
    {
        return $this->album;
    }

    public function setAlbum($album)
    {
        $this->album = $album;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
}

