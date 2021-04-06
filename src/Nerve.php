<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A common pathway for the electrochemical nerve impulses that are transmitted
 * along each of the axons.
 */
class Nerve extends AnatomicalStructure
{
    /**
     * The neurological pathway extension that involves muscle control.
     */
    private $nerveMotor;

    /**
     * The branches that delineate from the nerve bundle. Not to be confused with
     * [[branchOf]].
     */
    private $branch;

    /**
     * The neurological pathway that originates the neurons.
     */
    private $sourcedFrom;

    /**
     * The neurological pathway extension that inputs and sends information to the
     * brain or spinal cord.
     */
    private $sensoryUnit;

    public function getNerveMotor()
    {
        return $this->nerveMotor;
    }

    public function setNerveMotor($nerveMotor)
    {
        $this->nerveMotor = $nerveMotor;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function setBranch($branch)
    {
        $this->branch = $branch;
    }

    public function getSourcedFrom()
    {
        return $this->sourcedFrom;
    }

    public function setSourcedFrom($sourcedFrom)
    {
        $this->sourcedFrom = $sourcedFrom;
    }

    public function getSensoryUnit()
    {
        return $this->sensoryUnit;
    }

    public function setSensoryUnit($sensoryUnit)
    {
        $this->sensoryUnit = $sensoryUnit;
    }
}

