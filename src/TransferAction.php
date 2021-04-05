<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of transferring/moving (abstract or concrete) animate or inanimate
 * objects from one place to another.
 */
class TransferAction extends Action
{
    /**
     * A sub property of location. The original location of the object or the agent
     * before the action.
     */
    private $fromLocation;

    public function getFromLocation()
    {
        return $this->fromLocation;
    }

    public function setFromLocation($fromLocation)
    {
        $this->fromLocation = $fromLocation;
    }
}

