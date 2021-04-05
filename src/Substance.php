<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any matter of defined composition that has discrete existence, whose origin may
 * be biological, mineral or chemical.
 */
class Substance extends MedicalEntity
{
    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     */
    private $maximumIntake;

    public function getMaximumIntake()
    {
        return $this->maximumIntake;
    }

    public function setMaximumIntake($maximumIntake)
    {
        $this->maximumIntake = $maximumIntake;
    }
}

