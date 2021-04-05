<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A specific strength in which a medical drug is available in a specific country.
 */
class DrugStrength extends MedicalIntangible
{
    /**
     * The units of an active ingredient's strength, e.g. mg.
     */
    private $strengthUnit;

    /**
     * The location in which the strength is available.
     */
    private $availableIn;

    /**
     * The value of an active ingredient's strength, e.g. 325.
     */
    private $strengthValue;

    public function getStrengthUnit()
    {
        return $this->strengthUnit;
    }

    public function setStrengthUnit($strengthUnit)
    {
        $this->strengthUnit = $strengthUnit;
    }

    public function getAvailableIn()
    {
        return $this->availableIn;
    }

    public function setAvailableIn($availableIn)
    {
        $this->availableIn = $availableIn;
    }

    public function getStrengthValue()
    {
        return $this->strengthValue;
    }

    public function setStrengthValue($strengthValue)
    {
        $this->strengthValue = $strengthValue;
    }
}

