<?php

declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A risk factor is anything that increases a person's likelihood of developing or
 * contracting a disease, medical condition, or complication.
 */
class MedicalRiskFactor extends MedicalEntity
{
    /**
     * The condition, complication, etc. influenced by this factor.
     */
    private $increasesRiskOf;

    public function getIncreasesRiskOf()
    {
        return $this->increasesRiskOf;
    }

    public function setIncreasesRiskOf($increasesRiskOf)
    {
        $this->increasesRiskOf = $increasesRiskOf;
    }
}

