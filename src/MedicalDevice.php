<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 */
class MedicalDevice extends MedicalEntity
{
    /**
     * A possible serious complication and/or serious side effect of this therapy.
     * Serious adverse outcomes include those that are life-threatening; result in
     * death, disability, or permanent damage; require hospitalization or prolong
     * existing hospitalization; cause congenital anomalies or birth defects; or
     * jeopardize the patient and may require medical or surgical intervention to
     * prevent one of the outcomes in this definition.
     */
    private $seriousAdverseOutcome;

    /**
     * A description of the postoperative procedures, care, and/or followups for this
     * device.
     */
    private $postOp;

    /**
     * A description of the workup, testing, and other preparations required before
     * implanting this device.
     */
    private $preOp;

    /**
     * A description of the procedure involved in setting up, using, and/or installing
     * the device.
     */
    private $procedure;

    public function getSeriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    public function setSeriousAdverseOutcome($seriousAdverseOutcome)
    {
        $this->seriousAdverseOutcome = $seriousAdverseOutcome;
    }

    public function getPostOp()
    {
        return $this->postOp;
    }

    public function setPostOp($postOp)
    {
        $this->postOp = $postOp;
    }

    public function getPreOp()
    {
        return $this->preOp;
    }

    public function setPreOp($preOp)
    {
        $this->preOp = $preOp;
    }

    public function getProcedure()
    {
        return $this->procedure;
    }

    public function setProcedure($procedure)
    {
        $this->procedure = $procedure;
    }
}

