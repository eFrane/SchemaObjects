<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A single item within a larger data feed.
 */
class DataFeedItem extends Intangible
{
    /**
     * The datetime the item was removed from the DataFeed.
     */
    private $dateDeleted;

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     */
    private $dateCreated;

    /**
     * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a
     * list of 'artists')’.
     */
    private $item;

    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }
}

