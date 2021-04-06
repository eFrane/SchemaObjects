<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An over the air or online broadcast event.
 */
class BroadcastEvent extends PublicationEvent
{
    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47 standard
     * format](http://tools.ietf.org/html/bcp47).
     */
    private $subtitleLanguage;

    /**
     * True if the broadcast is of a live event.
     */
    private $isLiveBroadcast;

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
     */
    private $videoFormat;

    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     */
    private $broadcastOfEvent;

    public function getSubtitleLanguage()
    {
        return $this->subtitleLanguage;
    }

    public function setSubtitleLanguage($subtitleLanguage)
    {
        $this->subtitleLanguage = $subtitleLanguage;
    }

    public function getIsLiveBroadcast()
    {
        return $this->isLiveBroadcast;
    }

    public function setIsLiveBroadcast($isLiveBroadcast)
    {
        $this->isLiveBroadcast = $isLiveBroadcast;
    }

    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    public function setVideoFormat($videoFormat)
    {
        $this->videoFormat = $videoFormat;
    }

    public function getBroadcastOfEvent()
    {
        return $this->broadcastOfEvent;
    }

    public function setBroadcastOfEvent($broadcastOfEvent)
    {
        $this->broadcastOfEvent = $broadcastOfEvent;
    }
}

