<?php
/**
 * This is a generated class based on the schema.org type catalog.
 *
 * @license MIT
 */


declare(strict_types=1);

namespace EFrane\SchemaObjects;

/**
 * A US-style health insurance plan, including PPOs, EPOs, and HMOs.
 */
class HealthInsurancePlan extends Intangible
{
    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even
     * across different markets.)
     */
    private $healthPlanId;

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     */
    private $healthPlanDrugTier;

    /**
     * Formularies covered by this plan.
     */
    private $includesHealthPlanFormulary;

    /**
     * Networks covered by this plan.
     */
    private $includesHealthPlanNetwork;

    /**
     * TODO.
     */
    private $healthPlanDrugOption;

    /**
     * The URL that goes directly to the summary of benefits and coverage for the
     * specific standard plan or plan variation.
     */
    private $benefitsSummaryUrl;

    /**
     * The standard for interpreting thePlan ID. The preferred is "HIOS". See the
     * Centers for Medicare & Medicaid Services for more details.
     */
    private $usesHealthPlanIdStandard;

    /**
     * A contact point for a person or organization.
     */
    private $contactPoint;

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan
     * or plan variation.
     */
    private $healthPlanMarketingUrl;

    public function getHealthPlanId()
    {
        return $this->healthPlanId;
    }

    public function setHealthPlanId($healthPlanId)
    {
        $this->healthPlanId = $healthPlanId;
    }

    public function getHealthPlanDrugTier()
    {
        return $this->healthPlanDrugTier;
    }

    public function setHealthPlanDrugTier($healthPlanDrugTier)
    {
        $this->healthPlanDrugTier = $healthPlanDrugTier;
    }

    public function getIncludesHealthPlanFormulary()
    {
        return $this->includesHealthPlanFormulary;
    }

    public function setIncludesHealthPlanFormulary($includesHealthPlanFormulary)
    {
        $this->includesHealthPlanFormulary = $includesHealthPlanFormulary;
    }

    public function getIncludesHealthPlanNetwork()
    {
        return $this->includesHealthPlanNetwork;
    }

    public function setIncludesHealthPlanNetwork($includesHealthPlanNetwork)
    {
        $this->includesHealthPlanNetwork = $includesHealthPlanNetwork;
    }

    public function getHealthPlanDrugOption()
    {
        return $this->healthPlanDrugOption;
    }

    public function setHealthPlanDrugOption($healthPlanDrugOption)
    {
        $this->healthPlanDrugOption = $healthPlanDrugOption;
    }

    public function getBenefitsSummaryUrl()
    {
        return $this->benefitsSummaryUrl;
    }

    public function setBenefitsSummaryUrl($benefitsSummaryUrl)
    {
        $this->benefitsSummaryUrl = $benefitsSummaryUrl;
    }

    public function getUsesHealthPlanIdStandard()
    {
        return $this->usesHealthPlanIdStandard;
    }

    public function setUsesHealthPlanIdStandard($usesHealthPlanIdStandard)
    {
        $this->usesHealthPlanIdStandard = $usesHealthPlanIdStandard;
    }

    public function getContactPoint()
    {
        return $this->contactPoint;
    }

    public function setContactPoint($contactPoint)
    {
        $this->contactPoint = $contactPoint;
    }

    public function getHealthPlanMarketingUrl()
    {
        return $this->healthPlanMarketingUrl;
    }

    public function setHealthPlanMarketingUrl($healthPlanMarketingUrl)
    {
        $this->healthPlanMarketingUrl = $healthPlanMarketingUrl;
    }
}

