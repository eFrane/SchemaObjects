<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * The legal availability status of a medical drug.
 */
class DrugLegalStatus extends MedicalIntangible
{
    /**
     * The location in which the status applies.
     */
    private $applicableLocation;

    public function getApplicableLocation()
    {
        return $this->applicableLocation;
    }

    public function setApplicableLocation($applicableLocation)
    {
        $this->applicableLocation = $applicableLocation;
    }
}

