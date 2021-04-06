<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A stage of a medical condition, such as 'Stage IIIa'.
 */
class MedicalConditionStage extends MedicalIntangible
{
    /**
     * The stage represented as a number, e.g. 3.
     */
    private $stageAsNumber;

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     */
    private $subStageSuffix;

    public function getStageAsNumber()
    {
        return $this->stageAsNumber;
    }

    public function setStageAsNumber($stageAsNumber)
    {
        $this->stageAsNumber = $stageAsNumber;
    }

    public function getSubStageSuffix()
    {
        return $this->subStageSuffix;
    }

    public function setSubStageSuffix($subStageSuffix)
    {
        $this->subStageSuffix = $subStageSuffix;
    }
}

