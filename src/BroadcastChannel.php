<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 */
class BroadcastChannel extends Intangible
{
    /**
     * The CableOrSatelliteService offering the channel.
     */
    private $inBroadcastLineup;

    /**
     * The unique address by which the BroadcastService can be identified in a provider
     * lineup. In US, this is typically a number.
     */
    private $broadcastChannelId;

    /**
     * The type of service required to have access to the channel (e.g. Standard or
     * Premium).
     */
    private $broadcastServiceTier;

    /**
     * The BroadcastService offered on this channel.
     */
    private $providesBroadcastService;

    public function getInBroadcastLineup()
    {
        return $this->inBroadcastLineup;
    }

    public function setInBroadcastLineup($inBroadcastLineup)
    {
        $this->inBroadcastLineup = $inBroadcastLineup;
    }

    public function getBroadcastChannelId()
    {
        return $this->broadcastChannelId;
    }

    public function setBroadcastChannelId($broadcastChannelId)
    {
        $this->broadcastChannelId = $broadcastChannelId;
    }

    public function getBroadcastServiceTier()
    {
        return $this->broadcastServiceTier;
    }

    public function setBroadcastServiceTier($broadcastServiceTier)
    {
        $this->broadcastServiceTier = $broadcastServiceTier;
    }

    public function getProvidesBroadcastService()
    {
        return $this->providesBroadcastService;
    }

    public function setProvidesBroadcastService($providesBroadcastService)
    {
        $this->providesBroadcastService = $providesBroadcastService;
    }
}

