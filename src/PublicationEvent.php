<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for a
 * CreativeWork of any type e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 */
class PublicationEvent extends Event
{
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     */
    private $free;

    /**
     * An agent associated with the publication event.
     */
    private $publishedBy;

    /**
     * A broadcast service associated with the publication event.
     */
    private $publishedOn;

    public function getFree()
    {
        return $this->free;
    }

    public function setFree($free)
    {
        $this->free = $free;
    }

    public function getPublishedBy()
    {
        return $this->publishedBy;
    }

    public function setPublishedBy($publishedBy)
    {
        $this->publishedBy = $publishedBy;
    }

    public function getPublishedOn()
    {
        return $this->publishedOn;
    }

    public function setPublishedOn($publishedOn)
    {
        $this->publishedOn = $publishedOn;
    }
}

