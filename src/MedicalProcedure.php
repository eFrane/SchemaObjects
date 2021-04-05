<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A process of care used in either a diagnostic, therapeutic, preventive or
 * palliative capacity that relies on invasive (surgical), non-invasive, or other
 * techniques.
 */
class MedicalProcedure extends MedicalEntity
{
    /**
     * Typical or recommended followup care after the procedure is performed.
     */
    private $followup;

    /**
     * Typical preparation that a patient must undergo before having the procedure
     * performed.
     */
    private $preparation;

    /**
     * How the procedure is performed.
     */
    private $howPerformed;

    /**
     * Location in the body of the anatomical structure.
     */
    private $bodyLocation;

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     */
    private $procedureType;

    public function getFollowup()
    {
        return $this->followup;
    }

    public function setFollowup($followup)
    {
        $this->followup = $followup;
    }

    public function getPreparation()
    {
        return $this->preparation;
    }

    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;
    }

    public function getHowPerformed()
    {
        return $this->howPerformed;
    }

    public function setHowPerformed($howPerformed)
    {
        $this->howPerformed = $howPerformed;
    }

    public function getBodyLocation()
    {
        return $this->bodyLocation;
    }

    public function setBodyLocation($bodyLocation)
    {
        $this->bodyLocation = $bodyLocation;
    }

    public function getProcedureType()
    {
        return $this->procedureType;
    }

    public function setProcedureType($procedureType)
    {
        $this->procedureType = $procedureType;
    }
}

