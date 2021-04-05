<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A specific dosing schedule for a drug or supplement.
 */
class DoseSchedule extends MedicalIntangible
{
    /**
     * The unit of the dose, e.g. 'mg'.
     */
    private $doseUnit;

    /**
     * How often the dose is taken, e.g. 'daily'.
     */
    private $frequency;

    /**
     * The value of the dose, e.g. 500.
     */
    private $doseValue;

    /**
     * Characteristics of the population for which this is intended, or which typically
     * uses it, e.g. 'adults'.
     */
    private $targetPopulation;

    public function getDoseUnit()
    {
        return $this->doseUnit;
    }

    public function setDoseUnit($doseUnit)
    {
        $this->doseUnit = $doseUnit;
    }

    public function getFrequency()
    {
        return $this->frequency;
    }

    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    public function getDoseValue()
    {
        return $this->doseValue;
    }

    public function setDoseValue($doseValue)
    {
        $this->doseValue = $doseValue;
    }

    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    public function setTargetPopulation($targetPopulation)
    {
        $this->targetPopulation = $targetPopulation;
    }
}

