<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any physical manifestation of a person's medical condition discoverable by
 * objective diagnostic tests or physical examination.
 */
class MedicalSign extends MedicalSignOrSymptom
{
    /**
     * A diagnostic test that can identify this sign.
     */
    private $identifyingTest;

    /**
     * A physical examination that can identify this sign.
     */
    private $identifyingExam;

    public function getIdentifyingTest()
    {
        return $this->identifyingTest;
    }

    public function setIdentifyingTest($identifyingTest)
    {
        $this->identifyingTest = $identifyingTest;
    }

    public function getIdentifyingExam()
    {
        return $this->identifyingExam;
    }

    public function setIdentifyingExam($identifyingExam)
    {
        $this->identifyingExam = $identifyingExam;
    }
}

