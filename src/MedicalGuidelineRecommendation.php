<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A guideline recommendation that is regarded as efficacious and where quality of
 * the data supporting the recommendation is sound.
 */
class MedicalGuidelineRecommendation extends MedicalGuideline
{
    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     */
    private $recommendationStrength;

    public function getRecommendationStrength()
    {
        return $this->recommendationStrength;
    }

    public function setRecommendationStrength($recommendationStrength)
    {
        $this->recommendationStrength = $recommendationStrength;
    }
}

