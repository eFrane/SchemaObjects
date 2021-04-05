<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A simple system that adds up the number of risk factors to yield a score that is
 * associated with prognosis, e.g. CHAD score, TIMI risk score.
 */
class MedicalRiskScore extends MedicalRiskEstimator
{
    /**
     * The algorithm or rules to follow to compute the score.
     */
    private $algorithm;

    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
    }
}

