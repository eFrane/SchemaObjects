<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Indicates employment-related experience requirements, e.g.
 * [[monthsOfExperience]].
 */
class OccupationalExperienceRequirements extends Intangible
{
    /**
     * Indicates the minimal number of months of experience required for a position.
     */
    private $monthsOfExperience;

    public function getMonthsOfExperience()
    {
        return $this->monthsOfExperience;
    }

    public function setMonthsOfExperience($monthsOfExperience)
    {
        $this->monthsOfExperience = $monthsOfExperience;
    }
}

