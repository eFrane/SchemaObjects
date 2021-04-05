<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Event type: Education event.
 */
class EducationEvent extends Event
{
    /**
     * The item being described is intended to assess the competency or learning
     * outcome defined by the referenced term.
     */
    private $assesses;

    public function getAssesses()
    {
        return $this->assesses;
    }

    public function setAssesses($assesses)
    {
        $this->assesses = $assesses;
    }
}

