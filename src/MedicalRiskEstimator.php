<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * Any rule set or interactive tool for estimating the risk of developing a
 * complication or condition.
 */
class MedicalRiskEstimator extends MedicalEntity
{
    /**
     * A modifiable or non-modifiable risk factor included in the calculation, e.g.
     * age, coexisting condition.
     */
    private $includedRiskFactor;

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     */
    private $estimatesRiskOf;

    public function getIncludedRiskFactor()
    {
        return $this->includedRiskFactor;
    }

    public function setIncludedRiskFactor($includedRiskFactor)
    {
        $this->includedRiskFactor = $includedRiskFactor;
    }

    public function getEstimatesRiskOf()
    {
        return $this->estimatesRiskOf;
    }

    public function setEstimatesRiskOf($estimatesRiskOf)
    {
        $this->estimatesRiskOf = $estimatesRiskOf;
    }
}

