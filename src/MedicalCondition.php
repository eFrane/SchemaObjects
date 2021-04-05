<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any condition of the human body that affects the normal functioning of a person,
 * whether physically or mentally. Includes diseases, injuries, disabilities,
 * disorders, syndromes, etc.
 */
class MedicalCondition extends MedicalEntity
{
    /**
     * A medical test typically performed given this condition.
     */
    private $typicalTest;

    /**
     * A possible unexpected and unfavorable evolution of a medical condition.
     * Complications may include worsening of the signs or symptoms of the disease,
     * extension of the condition to other organ systems, etc.
     */
    private $possibleComplication;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical condition
     * after an initial episode of the condition.
     */
    private $secondaryPrevention;

    /**
     * The status of the study (enumerated).
     */
    private $status;

    /**
     * The expected progression of the condition if it is not treated and allowed to
     * progress naturally.
     */
    private $naturalProgression;

    /**
     * A sign or symptom of this condition. Signs are objective or physically
     * observable manifestations of the medical condition while symptoms are the
     * subjective experience of the medical condition.
     */
    private $signOrSymptom;

    /**
     * A possible treatment to address this condition, sign or symptom.
     */
    private $possibleTreatment;

    /**
     * A preventative therapy used to prevent an initial occurrence of the medical
     * condition, such as vaccination.
     */
    private $primaryPrevention;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a patient
     * contracting this condition, e.g. age,  coexisting condition.
     */
    private $riskFactor;

    /**
     * The likely outcome in either the short term or long term of the medical
     * condition.
     */
    private $expectedPrognosis;

    /**
     * One of a set of differential diagnoses for the condition. Specifically, a
     * closely-related or competing diagnosis typically considered later in the
     * cognitive process whereby this medical condition is distinguished from others
     * most likely responsible for a similar collection of signs and symptoms to reach
     * the most parsimonious diagnosis or diagnoses in a patient.
     */
    private $differentialDiagnosis;

    /**
     * The stage of the condition, if applicable.
     */
    private $stage;

    public function getTypicalTest()
    {
        return $this->typicalTest;
    }

    public function setTypicalTest($typicalTest)
    {
        $this->typicalTest = $typicalTest;
    }

    public function getPossibleComplication()
    {
        return $this->possibleComplication;
    }

    public function setPossibleComplication($possibleComplication)
    {
        $this->possibleComplication = $possibleComplication;
    }

    public function getSecondaryPrevention()
    {
        return $this->secondaryPrevention;
    }

    public function setSecondaryPrevention($secondaryPrevention)
    {
        $this->secondaryPrevention = $secondaryPrevention;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getNaturalProgression()
    {
        return $this->naturalProgression;
    }

    public function setNaturalProgression($naturalProgression)
    {
        $this->naturalProgression = $naturalProgression;
    }

    public function getSignOrSymptom()
    {
        return $this->signOrSymptom;
    }

    public function setSignOrSymptom($signOrSymptom)
    {
        $this->signOrSymptom = $signOrSymptom;
    }

    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    public function setPossibleTreatment($possibleTreatment)
    {
        $this->possibleTreatment = $possibleTreatment;
    }

    public function getPrimaryPrevention()
    {
        return $this->primaryPrevention;
    }

    public function setPrimaryPrevention($primaryPrevention)
    {
        $this->primaryPrevention = $primaryPrevention;
    }

    public function getRiskFactor()
    {
        return $this->riskFactor;
    }

    public function setRiskFactor($riskFactor)
    {
        $this->riskFactor = $riskFactor;
    }

    public function getExpectedPrognosis()
    {
        return $this->expectedPrognosis;
    }

    public function setExpectedPrognosis($expectedPrognosis)
    {
        $this->expectedPrognosis = $expectedPrognosis;
    }

    public function getDifferentialDiagnosis()
    {
        return $this->differentialDiagnosis;
    }

    public function setDifferentialDiagnosis($differentialDiagnosis)
    {
        $this->differentialDiagnosis = $differentialDiagnosis;
    }

    public function getStage()
    {
        return $this->stage;
    }

    public function setStage($stage)
    {
        $this->stage = $stage;
    }
}

