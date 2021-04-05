<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A medical procedure intended primarily for therapeutic purposes, aimed at
 * improving a health condition.
 */
class TherapeuticProcedure extends MedicalProcedure
{
    /**
     * A possible complication and/or side effect of this therapy. If it is known that
     * an adverse outcome is serious (resulting in death, disability, or permanent
     * damage; requiring hospitalization; or is otherwise life-threatening or requires
     * immediate medical attention), tag it as a seriouseAdverseOutcome instead.
     */
    private $adverseOutcome;

    /**
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     */
    private $doseSchedule;

    public function getAdverseOutcome()
    {
        return $this->adverseOutcome;
    }

    public function setAdverseOutcome($adverseOutcome)
    {
        $this->adverseOutcome = $adverseOutcome;
    }

    public function getDoseSchedule()
    {
        return $this->doseSchedule;
    }

    public function setDoseSchedule($doseSchedule)
    {
        $this->doseSchedule = $doseSchedule;
    }
}

