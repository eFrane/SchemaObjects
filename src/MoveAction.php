<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The act of an agent relocating to a place.
 *
 * Related actions:
 *
 * * [[TransferAction]]: Unlike TransferAction, the subject of the move is a living
 * Person or Organization rather than an inanimate object.
 */
class MoveAction extends Action
{
    /**
     * A sub property of location. The final location of the object or the agent after
     * the action.
     */
    private $toLocation;

    public function getToLocation()
    {
        return $this->toLocation;
    }

    public function setToLocation($toLocation)
    {
        $this->toLocation = $toLocation;
    }
}

