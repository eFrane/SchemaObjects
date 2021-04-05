<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A collection of music tracks in playlist form.
 */
class MusicPlaylist extends CreativeWork
{
    /**
     * The number of tracks in this album or playlist.
     */
    private $numTracks;

    /**
     * A music recording (track)&#x2014;usually a single song.
     */
    private $tracks;

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given,
     * the list should contain items of type MusicRecording.
     */
    private $track;

    public function getNumTracks()
    {
        return $this->numTracks;
    }

    public function setNumTracks($numTracks)
    {
        $this->numTracks = $numTracks;
    }

    public function getTracks()
    {
        return $this->tracks;
    }

    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
    }

    public function getTrack()
    {
        return $this->track;
    }

    public function setTrack($track)
    {
        $this->track = $track;
    }
}

