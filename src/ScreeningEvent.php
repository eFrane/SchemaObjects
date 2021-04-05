<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A screening of a movie or other video.
 */
class ScreeningEvent extends Event
{
    /**
     * The movie presented during this event.
     */
    private $workPresented;

    public function getWorkPresented()
    {
        return $this->workPresented;
    }

    public function setWorkPresented($workPresented)
    {
        $this->workPresented = $workPresented;
    }
}

