<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A music recording (track), usually a single song.
 */
class MusicRecording extends CreativeWork
{
    /**
     * The International Standard Recording Code for the recording.
     */
    private $isrcCode;

    /**
     * The album to which this recording belongs.
     */
    private $inAlbum;

    /**
     * The playlist to which this recording belongs.
     */
    private $inPlaylist;

    /**
     * The composition this track is a recording of.
     */
    private $recordingOf;

    public function getIsrcCode()
    {
        return $this->isrcCode;
    }

    public function setIsrcCode($isrcCode)
    {
        $this->isrcCode = $isrcCode;
    }

    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    public function setInAlbum($inAlbum)
    {
        $this->inAlbum = $inAlbum;
    }

    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    public function setInPlaylist($inPlaylist)
    {
        $this->inPlaylist = $inPlaylist;
    }

    public function getRecordingOf()
    {
        return $this->recordingOf;
    }

    public function setRecordingOf($recordingOf)
    {
        $this->recordingOf = $recordingOf;
    }
}

