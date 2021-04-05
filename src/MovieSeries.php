<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A series of movies. Included movies can be indicated with the hasPart property.
 */
class MovieSeries extends CreativeWorkSeries
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can
     * be associated with individual items or with a series, episode, clip.
     */
    private $actor;

    public function getActor()
    {
        return $this->actor;
    }

    public function setActor($actor)
    {
        $this->actor = $actor;
    }
}

