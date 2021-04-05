<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The frequency in MHz and the modulation used for a particular BroadcastService.
 */
class BroadcastFrequencySpecification extends Intangible
{
    /**
     * The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
     */
    private $broadcastSignalModulation;

    /**
     * The frequency in MHz for a particular broadcast.
     */
    private $broadcastFrequencyValue;

    /**
     * The subchannel used for the broadcast.
     */
    private $broadcastSubChannel;

    public function getBroadcastSignalModulation()
    {
        return $this->broadcastSignalModulation;
    }

    public function setBroadcastSignalModulation($broadcastSignalModulation)
    {
        $this->broadcastSignalModulation = $broadcastSignalModulation;
    }

    public function getBroadcastFrequencyValue()
    {
        return $this->broadcastFrequencyValue;
    }

    public function setBroadcastFrequencyValue($broadcastFrequencyValue)
    {
        $this->broadcastFrequencyValue = $broadcastFrequencyValue;
    }

    public function getBroadcastSubChannel()
    {
        return $this->broadcastSubChannel;
    }

    public function setBroadcastSubChannel($broadcastSubChannel)
    {
        $this->broadcastSubChannel = $broadcastSubChannel;
    }
}

