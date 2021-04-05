<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An intangible type to be applied to any archive content, carrying with it a set
 * of properties required to describe archival items and collections.
 */
class ArchiveComponent extends CreativeWork
{
    /**
     * Current location of the item.
     */
    private $itemLocation;

    /**
     * [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
     */
    private $holdingArchive;

    public function getItemLocation()
    {
        return $this->itemLocation;
    }

    public function setItemLocation($itemLocation)
    {
        $this->itemLocation = $itemLocation;
    }

    public function getHoldingArchive()
    {
        return $this->holdingArchive;
    }

    public function setHoldingArchive($holdingArchive)
    {
        $this->holdingArchive = $holdingArchive;
    }
}

