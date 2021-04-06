<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A delivery service through which content is provided via broadcast over the air
 * or online.
 */
class BroadcastService extends Service
{
    /**
     * The area within which users can expect to reach the broadcast service.
     */
    private $area;

    /**
     * The language of the content or performance or used in an action. Please use one
     * of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     */
    private $inLanguage;

    /**
     * The media network(s) whose content is broadcast on this station.
     */
    private $broadcastAffiliateOf;

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple ranges
     * e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and
     * FM radio channels, e.g. "87 FM".
     */
    private $broadcastFrequency;

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601) for
     * which the service bases its broadcasts
     */
    private $broadcastTimezone;

    /**
     * A broadcast service to which the broadcast service may belong to such as
     * regional variations of a national channel.
     */
    private $parentService;

    /**
     * The name displayed in the channel guide. For many US affiliates, it is the
     * network name.
     */
    private $broadcastDisplayName;

    /**
     * The organization owning or operating the broadcast service.
     */
    private $broadcaster;

    /**
     * A broadcast channel of a broadcast service.
     */
    private $hasBroadcastChannel;

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    public function setInLanguage($inLanguage)
    {
        $this->inLanguage = $inLanguage;
    }

    public function getBroadcastAffiliateOf()
    {
        return $this->broadcastAffiliateOf;
    }

    public function setBroadcastAffiliateOf($broadcastAffiliateOf)
    {
        $this->broadcastAffiliateOf = $broadcastAffiliateOf;
    }

    public function getBroadcastFrequency()
    {
        return $this->broadcastFrequency;
    }

    public function setBroadcastFrequency($broadcastFrequency)
    {
        $this->broadcastFrequency = $broadcastFrequency;
    }

    public function getBroadcastTimezone()
    {
        return $this->broadcastTimezone;
    }

    public function setBroadcastTimezone($broadcastTimezone)
    {
        $this->broadcastTimezone = $broadcastTimezone;
    }

    public function getParentService()
    {
        return $this->parentService;
    }

    public function setParentService($parentService)
    {
        $this->parentService = $parentService;
    }

    public function getBroadcastDisplayName()
    {
        return $this->broadcastDisplayName;
    }

    public function setBroadcastDisplayName($broadcastDisplayName)
    {
        $this->broadcastDisplayName = $broadcastDisplayName;
    }

    public function getBroadcaster()
    {
        return $this->broadcaster;
    }

    public function setBroadcaster($broadcaster)
    {
        $this->broadcaster = $broadcaster;
    }

    public function getHasBroadcastChannel()
    {
        return $this->hasBroadcastChannel;
    }

    public function setHasBroadcastChannel($hasBroadcastChannel)
    {
        $this->hasBroadcastChannel = $hasBroadcastChannel;
    }
}

