<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A product taken by mouth that contains a dietary ingredient intended to
 * supplement the diet. Dietary ingredients may include vitamins, minerals, herbs
 * or other botanicals, amino acids, and substances such as enzymes, organ tissues,
 * glandulars and metabolites.
 */
class DietarySupplement extends Substance
{
    /**
     * The generic name of this drug or supplement.
     */
    private $nonProprietaryName;

    /**
     * The manufacturer of the product.
     */
    private $manufacturer;

    /**
     * Recommended intake of this supplement for a given population as defined by a
     * specific recommending authority.
     */
    private $recommendedIntake;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     */
    private $isProprietary;

    /**
     * Any potential safety concern associated with the supplement. May include
     * interactions with other drugs and foods, pregnancy, breastfeeding, known adverse
     * reactions, and documented efficacy of the supplement.
     */
    private $safetyConsideration;

    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     */
    private $proprietaryName;

    /**
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     */
    private $legalStatus;

    /**
     * The specific biochemical interaction through which this drug or supplement
     * produces its pharmacological effect.
     */
    private $mechanismOfAction;

    public function getNonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    public function setNonProprietaryName($nonProprietaryName)
    {
        $this->nonProprietaryName = $nonProprietaryName;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function getRecommendedIntake()
    {
        return $this->recommendedIntake;
    }

    public function setRecommendedIntake($recommendedIntake)
    {
        $this->recommendedIntake = $recommendedIntake;
    }

    public function getIsProprietary()
    {
        return $this->isProprietary;
    }

    public function setIsProprietary($isProprietary)
    {
        $this->isProprietary = $isProprietary;
    }

    public function getSafetyConsideration()
    {
        return $this->safetyConsideration;
    }

    public function setSafetyConsideration($safetyConsideration)
    {
        $this->safetyConsideration = $safetyConsideration;
    }

    public function getProprietaryName()
    {
        return $this->proprietaryName;
    }

    public function setProprietaryName($proprietaryName)
    {
        $this->proprietaryName = $proprietaryName;
    }

    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    public function setLegalStatus($legalStatus)
    {
        $this->legalStatus = $legalStatus;
    }

    public function getMechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    public function setMechanismOfAction($mechanismOfAction)
    {
        $this->mechanismOfAction = $mechanismOfAction;
    }
}

