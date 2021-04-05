<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any medical test, typically performed for diagnostic purposes.
 */
class MedicalTest extends MedicalEntity
{
    /**
     * Drugs that affect the test's results.
     */
    private $affectedBy;

    /**
     * Device used to perform the test.
     */
    private $usesDevice;

    /**
     * A condition the test is used to diagnose.
     */
    private $usedToDiagnose;

    /**
     * Range of acceptable values for a typical patient, when applicable.
     */
    private $normalRange;

    /**
     * A sign detected by the test.
     */
    private $signDetected;

    public function getAffectedBy()
    {
        return $this->affectedBy;
    }

    public function setAffectedBy($affectedBy)
    {
        $this->affectedBy = $affectedBy;
    }

    public function getUsesDevice()
    {
        return $this->usesDevice;
    }

    public function setUsesDevice($usesDevice)
    {
        $this->usesDevice = $usesDevice;
    }

    public function getUsedToDiagnose()
    {
        return $this->usedToDiagnose;
    }

    public function setUsedToDiagnose($usedToDiagnose)
    {
        $this->usedToDiagnose = $usedToDiagnose;
    }

    public function getNormalRange()
    {
        return $this->normalRange;
    }

    public function setNormalRange($normalRange)
    {
        $this->normalRange = $normalRange;
    }

    public function getSignDetected()
    {
        return $this->signDetected;
    }

    public function setSignDetected($signDetected)
    {
        $this->signDetected = $signDetected;
    }
}

