<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A strategy of regulating the intake of food to achieve or maintain a specific
 * health-related goal.
 */
class Diet extends CreativeWork
{
    /**
     * Specific physiologic benefits associated to the plan.
     */
    private $physiologicalBenefits;

    /**
     * People or organizations that endorse the plan.
     */
    private $endorsers;

    /**
     * Medical expert advice related to the plan.
     */
    private $expertConsiderations;

    /**
     * Specific physiologic risks associated to the diet plan.
     */
    private $risks;

    /**
     * Nutritional information specific to the dietary plan. May include dietary
     * recommendations on what foods to avoid, what foods to consume, and specific
     * alterations/deviations from the USDA or other regulatory body's approved dietary
     * guidelines.
     */
    private $dietFeatures;

    public function getPhysiologicalBenefits()
    {
        return $this->physiologicalBenefits;
    }

    public function setPhysiologicalBenefits($physiologicalBenefits)
    {
        $this->physiologicalBenefits = $physiologicalBenefits;
    }

    public function getEndorsers()
    {
        return $this->endorsers;
    }

    public function setEndorsers($endorsers)
    {
        $this->endorsers = $endorsers;
    }

    public function getExpertConsiderations()
    {
        return $this->expertConsiderations;
    }

    public function setExpertConsiderations($expertConsiderations)
    {
        $this->expertConsiderations = $expertConsiderations;
    }

    public function getRisks()
    {
        return $this->risks;
    }

    public function setRisks($risks)
    {
        $this->risks = $risks;
    }

    public function getDietFeatures()
    {
        return $this->dietFeatures;
    }

    public function setDietFeatures($dietFeatures)
    {
        $this->dietFeatures = $dietFeatures;
    }
}

