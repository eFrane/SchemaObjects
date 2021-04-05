<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A video file.
 */
class VideoObject extends MediaObject
{
    /**
     * The frame size of the video.
     */
    private $videoFrameSize;

    /**
     * The quality of the video.
     */
    private $videoQuality;

    public function getVideoFrameSize()
    {
        return $this->videoFrameSize;
    }

    public function setVideoFrameSize($videoFrameSize)
    {
        $this->videoFrameSize = $videoFrameSize;
    }

    public function getVideoQuality()
    {
        return $this->videoQuality;
    }

    public function setVideoQuality($videoQuality)
    {
        $this->videoQuality = $videoQuality;
    }
}

