<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A medical trial is a type of medical study that uses scientific process used to
 * compare the safety and efficacy of medical therapies or medical procedures. In
 * general, medical trials are controlled and subjects are allocated at random to
 * the different treatment and/or control groups.
 */
class MedicalTrial extends MedicalStudy
{
    /**
     * Specifics about the trial design (enumerated).
     */
    private $trialDesign;

    public function getTrialDesign()
    {
        return $this->trialDesign;
    }

    public function setTrialDesign($trialDesign)
    {
        $this->trialDesign = $trialDesign;
    }
}

