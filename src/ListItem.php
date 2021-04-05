<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * An list item, e.g. a step in a checklist or how-to description.
 */
class ListItem extends Intangible
{
    /**
     * The position of an item in a series or sequence of items.
     */
    private $position;

    /**
     * A link to the ListItem that follows the current one.
     */
    private $nextItem;

    /**
     * A link to the ListItem that preceeds the current one.
     */
    private $previousItem;

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getNextItem()
    {
        return $this->nextItem;
    }

    public function setNextItem($nextItem)
    {
        $this->nextItem = $nextItem;
    }

    public function getPreviousItem()
    {
        return $this->previousItem;
    }

    public function setPreviousItem($previousItem)
    {
        $this->previousItem = $previousItem;
    }
}

